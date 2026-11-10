@php
    use App\Support\SitePages;

    $canonical = SitePages::url($page['path']);
    $home = SitePages::url('/');
    $ogImage = SitePages::url('/images/og-shoope.png');
    $parent = config('shoope.parent');

    $graph = [
        [
            '@type' => 'Organization',
            '@id' => $home.'#organization',
            'name' => 'Shoope',
            'url' => $home,
            'logo' => SitePages::url('/images/shoope-icon-512.png'),
            'description' => 'Escrow checkout for social-media shops in Kenya. Payments through Sharet Pay (M-Pesa and card).',
            'areaServed' => ['@type' => 'Country', 'name' => 'Kenya'],
            'parentOrganization' => [
                '@type' => 'Organization',
                'name' => $parent['name'],
                'url' => $parent['url'],
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $home.'#website',
            'url' => $home,
            'name' => 'Shoope',
            'inLanguage' => 'en-KE',
            'publisher' => ['@id' => $home.'#organization'],
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical.'#webpage',
            'url' => $canonical,
            'name' => $page['title'],
            'description' => $page['description'],
            'inLanguage' => 'en-KE',
            'isPartOf' => ['@id' => $home.'#website'],
            'primaryImageOfPage' => $ogImage,
        ],
    ];

    if ($page['key'] !== 'home') {
        $graph[] = [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Shoope', 'item' => $home],
                ['@type' => 'ListItem', 'position' => 2, 'name' => $page['breadcrumb'], 'item' => $canonical],
            ],
        ];
    }

    if (! empty($page['faq'])) {
        $graph[] = [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn ($f) => [
                '@type' => 'Question',
                'name' => $f['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
            ], $page['faq']),
        ];
    }

    $analytics = config('services.sharet_analytics.url');
@endphp
<!DOCTYPE html>
<html lang="en-KE">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $page['title'] }}</title>
    <meta name="description" content="{{ $page['description'] }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ $canonical }}">
    <meta name="theme-color" content="#7bb054">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/png" sizes="512x512" href="/images/shoope-icon-512.png">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Shoope">
    <meta property="og:locale" content="en_KE">
    <meta property="og:title" content="{{ $page['title'] }}">
    <meta property="og:description" content="{{ $page['description'] }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Shoope – safe payments for online shops in Kenya">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page['title'] }}">
    <meta name="twitter:description" content="{{ $page['description'] }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>

    @vite('resources/css/app.css')

    @if (app()->environment('production') && $analytics)
        <script defer src="{{ rtrim($analytics, '/') }}/js/sharet-analytics.js" data-site="shoope"></script>
    @endif
    @if (session('waitlist_joined'))
        <script>(window.sa=window.sa||[]).push(['conversion','signup'])</script>
    @endif
</head>
<body class="bg-white text-slate-800 antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-white focus:px-3 focus:py-2">Skip to content</a>

    @include('site.partials.header')

    <main id="main">
        @yield('content')

        @if (! empty($page['faq']) && $page['key'] !== 'faq')
            @include('site.partials.faq', ['faq' => $page['faq'], 'heading' => 'Questions people ask'])
        @endif

        @include('site.partials.waitlist')
    </main>

    @include('site.partials.footer')
</body>
</html>
