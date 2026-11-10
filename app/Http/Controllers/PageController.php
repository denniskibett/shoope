<?php

namespace App\Http\Controllers;

use App\Support\SitePages;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function show(string $page): View
    {
        $page = SitePages::get($page);

        return view($page['view'], ['page' => $page]);
    }
}
