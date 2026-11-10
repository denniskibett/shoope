<?php

namespace App\Http\Controllers;

use App\Support\SitePages;
use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function sitemap(): Response
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach (SitePages::all() as $key => $page) {
            $xml .= '  <url><loc>'.e(SitePages::url($page['path'])).'</loc>'
                .'<lastmod>'.SitePages::lastmod($page).'</lastmod>'
                .'<changefreq>monthly</changefreq>'
                .'<priority>'.$page['priority'].'</priority></url>'."\n";
        }

        return response($xml.'</urlset>'."\n", 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }

    public function robots(): Response
    {
        if (! app()->environment('production')) {
            $body = "User-agent: *\nDisallow: /\n";
        } else {
            $body = "User-agent: *\n"
                ."Allow: /\n"
                ."Disallow: /dashboard\n"
                ."Disallow: /profile\n"
                ."Disallow: /waitlist\n"
                ."Disallow: /verify-email\n"
                ."Disallow: /confirm-password\n"
                ."Disallow: /reset-password\n"
                ."\n"
                .'Sitemap: '.SitePages::url('/sitemap.xml')."\n";
        }

        return response($body, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
    }
}
