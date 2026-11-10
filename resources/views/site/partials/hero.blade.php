<section class="bg-gradient-to-b from-brand-50 to-white">
    <div class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16">
        <nav aria-label="Breadcrumb" class="text-sm text-slate-500">
            <a href="{{ route('home') }}" class="hover:text-brand-700">Shoope</a>
            <span aria-hidden="true"> / </span>
            <span aria-current="page">{{ $page['breadcrumb'] }}</span>
        </nav>
        @isset($eyebrow)<p class="mt-6 text-sm font-semibold uppercase tracking-wider text-brand-700">{{ $eyebrow }}</p>@endisset
        <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-brand-900 sm:text-5xl">{{ $h1 }}</h1>
        <p class="mt-5 text-lg text-slate-600">{{ $lead }}</p>
        <a href="#waitlist" data-sa-click="{{ $page['key'] }}_hero_join" class="mt-7 inline-block rounded-full bg-brand-700 px-6 py-3 font-semibold text-white hover:bg-brand-800">{{ $cta ?? 'Join early access' }}</a>
    </div>
</section>
