<footer class="border-t border-slate-100 bg-white">
    <div class="mx-auto grid max-w-6xl gap-10 px-4 py-12 sm:px-6 md:grid-cols-3">
        <div>
            <img src="/images/shoope-logo-nav.png" alt="Shoope" width="98" height="32" class="h-8 w-auto" loading="lazy">
            <p class="mt-3 text-sm text-slate-600">Safe payments for online shops in Kenya. Escrow for Instagram, TikTok, WhatsApp and Facebook Marketplace sellers, with M-Pesa and card through Sharet Pay.</p>
            <p class="mt-3 text-sm text-slate-500">Shoope is a product of <a href="https://sharet.africa" class="underline hover:text-brand-700">Sharet Africa Ltd</a>.</p>
        </div>

        <nav aria-label="Shoope pages">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-slate-900">Shoope</h2>
            <ul class="mt-3 space-y-2 text-sm text-slate-600">
                @foreach (\App\Support\SitePages::all() as $key => $item)
                    <li><a href="{{ $key === 'home' ? route('home') : route('page.'.$key) }}" class="hover:text-brand-700">{{ $item['nav'] }}</a></li>
                @endforeach
                <li><a href="#waitlist" class="hover:text-brand-700">Join early access</a></li>
            </ul>
        </nav>

        <nav aria-label="More from Sharet">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-slate-900">More from Sharet</h2>
            <ul class="mt-3 space-y-2 text-sm text-slate-600">
                @foreach (config('shoope.sister_sites') as $site)
                    <li><a href="{{ $site['url'] }}" class="hover:text-brand-700"><span class="font-medium text-slate-800">{{ $site['name'] }}</span> – {{ $site['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="border-t border-slate-100 py-5 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} Sharet Africa Ltd. Shoope is in development; features described on this site are planned and may change before launch.
    </div>
</footer>
