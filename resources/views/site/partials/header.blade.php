@php($nav = ['how' => 'How it works', 'buyers' => 'For buyers', 'sellers' => 'For sellers', 'escrow' => 'Escrow', 'faq' => 'FAQ'])
<header class="sticky top-0 z-40 border-b border-slate-100 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6">
        <a href="{{ route('home') }}" class="shrink-0" aria-label="Shoope home">
            <img src="/images/shoope-logo-nav.png" alt="Shoope" width="98" height="32" class="h-8 w-auto">
        </a>

        <nav aria-label="Main" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm font-medium text-slate-600">
                @foreach ($nav as $key => $label)
                    <li><a href="{{ route('page.'.$key) }}" class="hover:text-brand-700 {{ $page['key'] === $key ? 'text-brand-700' : '' }}" @if ($page['key'] === $key) aria-current="page" @endif>{{ $label }}</a></li>
                @endforeach
            </ul>
        </nav>

        <div class="flex items-center gap-2">
            <a href="#waitlist" data-sa-click="nav_join" class="rounded-full bg-brand-700 px-4 py-2 text-sm font-semibold text-white hover:bg-brand-800">Join early access</a>
            <details class="relative md:hidden">
                <summary class="flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded-full border border-slate-200 [&::-webkit-details-marker]:hidden" aria-label="Menu">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 5h14v2H3V5zm0 4h14v2H3V9zm0 4h14v2H3v-2z" clip-rule="evenodd"/></svg>
                </summary>
                <nav aria-label="Mobile" class="absolute right-0 mt-2 w-60 rounded-xl border border-slate-100 bg-white p-2 shadow-lg">
                    <a href="{{ route('home') }}" class="block rounded-lg px-3 py-2 text-sm hover:bg-brand-50">Home</a>
                    @foreach ($nav as $key => $label)
                        <a href="{{ route('page.'.$key) }}" class="block rounded-lg px-3 py-2 text-sm hover:bg-brand-50">{{ $label }}</a>
                    @endforeach
                    <a href="{{ route('page.social') }}" class="block rounded-lg px-3 py-2 text-sm hover:bg-brand-50">Instagram, TikTok &amp; Marketplace</a>
                </nav>
            </details>
        </div>
    </div>
</header>
