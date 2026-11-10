<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('waitlist:show', function () {
    $path = config('shoope.waitlist_path');
    if (! is_file($path)) {
        $this->info('No waitlist signups yet.');

        return;
    }
    $rows = array_map(fn ($line) => str_getcsv($line, ',', '"', ''), file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
    $header = array_shift($rows);
    $this->table($header, $rows);
    $this->info(count($rows).' signup(s) in '.$path);
})->purpose('List Shoope early-access waitlist signups');
