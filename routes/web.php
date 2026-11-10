<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\WaitlistController;
use App\Support\SitePages;
use Illuminate\Support\Facades\Route;

// Public, indexable pages (titles, descriptions, FAQs: App\Support\SitePages).
foreach (SitePages::all() as $key => $page) {
    Route::get($page['path'], [PageController::class, 'show'])
        ->defaults('page', $key)
        ->name($key === 'home' ? 'home' : 'page.'.$key);
}

Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [SeoController::class, 'robots'])->name('robots');

Route::post('/waitlist', [WaitlistController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('waitlist.store');

Route::middleware('noindex')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});
