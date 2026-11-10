<?php

use App\Support\SitePages;

beforeEach(function () {
    config(['app.url' => 'https://shoope.africa']);
});

it('serves an XML sitemap of every public page', function () {
    $response = $this->get('/sitemap.xml')->assertOk();
    expect($response->headers->get('Content-Type'))->toStartWith('application/xml');

    $xml = simplexml_load_string($response->getContent());
    $locs = [];
    foreach ($xml->url as $u) {
        $locs[] = (string) $u->loc;
    }

    expect($locs)->toHaveCount(count(SitePages::all()))
        ->toContain('https://shoope.africa/', 'https://shoope.africa/escrow-kenya', 'https://shoope.africa/faq')
        ->not->toContain('https://shoope.africa/login');

    foreach ($xml->url as $url) {
        expect((string) $url->lastmod)->toMatch('/^\d{4}-\d{2}-\d{2}$/');
        $path = parse_url((string) $url->loc, PHP_URL_PATH);
        $this->get($path)->assertOk();
    }
});

it('blocks all crawling outside production', function () {
    $this->get('/robots.txt')->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
        ->assertSeeText("User-agent: *\nDisallow: /", false);
});

it('serves the production robots.txt with the sitemap and private areas disallowed', function () {
    app()->detectEnvironment(fn () => 'production');

    $body = $this->get('/robots.txt')->assertOk()->getContent();

    expect($body)
        ->toContain("Allow: /\n")
        ->toContain("Disallow: /dashboard\n")
        ->toContain("Disallow: /profile\n")
        ->toContain('Sitemap: https://shoope.africa/sitemap.xml')
        ->not->toContain("Disallow: /\n");
});
