<?php

namespace App\Http\Controllers;

use App\Support\SitePages;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

/**
 * Early-access waitlist. Signups are appended to a CSV under storage/ so no
 * database table (and no schema change) is needed while Shoope is pre-launch.
 */
class WaitlistController extends Controller
{
    public const ROLES = ['seller' => 'I sell online', 'buyer' => 'I buy online', 'both' => 'Both'];

    public const PLATFORMS = [
        'instagram' => 'Instagram',
        'tiktok' => 'TikTok',
        'whatsapp' => 'WhatsApp',
        'facebook' => 'Facebook Marketplace',
        'other' => 'Other',
    ];

    public function store(Request $request): RedirectResponse
    {
        $source = array_key_exists((string) $request->input('source'), SitePages::all())
            ? (string) $request->input('source') : 'home';
        $back = rtrim(url(SitePages::get($source)['path']), '/').($source === 'home' ? '/' : '').'#waitlist';

        // Honeypot: bots fill every field. Pretend it worked.
        if (filled($request->input('website'))) {
            return redirect()->to($back)->with('waitlist_status', 'ok');
        }

        $data = $request->validate([
            'contact' => ['required', 'string', 'max:120'],
            'role' => ['required', 'in:'.implode(',', array_keys(self::ROLES))],
            'platform' => ['nullable', 'in:'.implode(',', array_keys(self::PLATFORMS))],
        ], [
            'contact.required' => 'Enter your email address or phone number.',
        ]);

        $contact = $this->normaliseContact($data['contact']);
        if ($contact === null) {
            throw ValidationException::withMessages([
                'contact' => 'Enter a valid email address or Kenyan phone number (e.g. 0712 345 678).',
            ])->redirectTo($back);
        }

        $this->append($contact, $data['role'], $data['platform'] ?? '', $source);

        return redirect()->to($back)
            ->with('waitlist_status', 'ok')
            ->with('waitlist_joined', true);
    }

    private function normaliseContact(string $raw): ?string
    {
        $raw = trim($raw);

        if (str_contains($raw, '@')) {
            $email = mb_strtolower($raw);

            return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : null;
        }

        $digits = preg_replace('/[\s\-().]/', '', $raw);
        if (preg_match('/^(?:\+?254|0)?([17]\d{8})$/', $digits, $m)) {
            return '254'.$m[1];
        }

        return null;
    }

    private function append(string $contact, string $role, string $platform, string $source): void
    {
        $path = config('shoope.waitlist_path');
        $dir = dirname($path);
        if (! is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

        $handle = fopen($path, 'c+');
        if ($handle === false) {
            Log::error('Shoope waitlist file is not writable', ['path' => $path]);
            abort(503);
        }

        try {
            flock($handle, LOCK_EX);

            $known = false;
            $isNew = fstat($handle)['size'] === 0;
            while (($row = fgetcsv($handle, null, ',', '"', '')) !== false) {
                if (($row[1] ?? null) === $contact) {
                    $known = true;
                    break;
                }
            }

            if (! $known) {
                fseek($handle, 0, SEEK_END);
                if ($isNew) {
                    fputcsv($handle, ['joined_at', 'contact', 'role', 'platform', 'source'], ',', '"', '');
                }
                fputcsv($handle, array_map([$this, 'safeCell'], [
                    now()->toIso8601String(), $contact, $role, $platform, $source,
                ]), ',', '"', '');
                Log::info('Shoope waitlist signup', ['role' => $role, 'platform' => $platform, 'source' => $source]);
            }
        } finally {
            flock($handle, LOCK_UN);
            fclose($handle);
        }
    }

    /** Stop spreadsheet formula injection when the CSV is opened in Excel/Sheets. */
    private function safeCell(string $value): string
    {
        return preg_match('/^[=+\-@]/', $value) ? "'".$value : $value;
    }
}
