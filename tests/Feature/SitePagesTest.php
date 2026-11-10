<?php

use App\Support\SitePages;

beforeEach(function () {
    config(['app.url' => 'https://shoope.africa']);
});

function jsonLdGraph(string $html): array
{
    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $m);
    expect($m[1])->not->toBeEmpty();

    return collect($m[1])->flatMap(fn ($json) => json_decode($json, true, 512, JSON_THROW_ON_ERROR)['@graph'])->all();
}

it('renders the branded home page', function () {
    $html = $this->get('/')->assertOk()->getContent();

    expect($html)
        ->toContain('<title>Shoope – Safe payments for online shops in Kenya')
        ->toContain('<link rel="canonical" href="https://shoope.africa/">')
        ->toContain('<meta property="og:image" content="https://shoope.africa/images/og-shoope.png">')
        ->toContain('name="twitter:card" content="summary_large_image"')
        ->toContain('<html lang="en-KE">')
        ->not->toContain('Freshcart')
        ->not->toContain('noindex');

    expect(substr_count($html, '<h1'))->toBe(1);
    expect($html)->toMatch('#<h1[^>]*>Safe payments for online shops in Kenya</h1>#');

    $graph = collect(jsonLdGraph($html))->keyBy('@type');
    expect($graph['Organization']['parentOrganization']['name'])->toBe('Sharet Africa Ltd');
    expect($graph['FAQPage']['mainEntity'])->not->toBeEmpty();
});

it('serves every landing page with its own title, canonical, single h1 and FAQ JSON-LD', function (string $key) {
    $page = SitePages::get($key);
    $html = $this->get($page['path'])->assertOk()->getContent();

    expect($html)
        ->toContain('<title>'.e($page['title']).'</title>')
        ->toContain('<meta name="description" content="'.e($page['description']).'">')
        ->toContain('<link rel="canonical" href="https://shoope.africa'.$page['path'].'">')
        ->toContain('id="waitlist"');
    expect(substr_count($html, '<h1'))->toBe(1);

    $types = collect(jsonLdGraph($html))->pluck('@type');
    expect($types)->toContain('Organization', 'BreadcrumbList', 'FAQPage');

    $faq = collect(jsonLdGraph($html))->firstWhere('@type', 'FAQPage');
    expect(count($faq['mainEntity']))->toBe(count($page['faq']));
})->with(['escrow', 'social', 'buyers', 'sellers', 'how', 'faq']);

it('keeps titles and descriptions unique across public pages', function () {
    $pages = collect(SitePages::all());

    expect($pages->pluck('title')->unique())->toHaveCount($pages->count());
    expect($pages->pluck('description')->unique())->toHaveCount($pages->count());
});

it('links the sister sites from the footer but not itself', function () {
    $html = $this->get('/')->getContent();

    foreach (['https://sharet.africa', 'https://breve.sharet.africa', 'https://aiyotickets.com', 'https://eserviz.aiyotickets.com', 'https://scharge.sharet.africa', 'https://loans.sharet.africa'] as $url) {
        expect($html)->toContain('href="'.$url.'"');
    }
    expect($html)->not->toContain('href="https://shoope.africa"');
});

it('only loads the cross-site tracker in production', function () {
    expect($this->get('/')->getContent())->not->toContain('sharet-analytics.js');

    app()->detectEnvironment(fn () => 'production');
    config(['services.sharet_analytics.url' => 'https://sharet.africa']);

    expect($this->get('/')->getContent())
        ->toContain('<script defer src="https://sharet.africa/js/sharet-analytics.js" data-site="shoope"></script>');
});

it('marks auth pages noindex', function () {
    $this->get('/login')->assertOk()
        ->assertHeader('X-Robots-Tag', 'noindex, nofollow')
        ->assertSee('<meta name="robots" content="noindex, nofollow">', false);
    $this->get('/register')->assertHeader('X-Robots-Tag', 'noindex, nofollow');
});
