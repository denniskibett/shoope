@extends('layouts.site')

@section('content')
<section class="bg-gradient-to-b from-brand-50 to-white">
    <div class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16">
        <nav aria-label="Breadcrumb" class="text-sm text-slate-500">
            <a href="{{ route('home') }}" class="hover:text-brand-700">Shoope</a>
            <span aria-hidden="true"> / </span>
            <span aria-current="page">FAQ</span>
        </nav>
        <h1 class="mt-6 text-3xl font-extrabold tracking-tight text-brand-900 sm:text-5xl">Frequently asked questions</h1>
        <p class="mt-5 text-lg text-slate-600">Everything about Shoope, escrow and paying safely online in Kenya. Can't find your answer? Join the waitlist and ask us when we reach out.</p>
    </div>
</section>
@include('site.partials.faq', ['faq' => $page['faq'], 'heading' => 'About Shoope'])
<section class="mx-auto max-w-3xl px-4 py-12 sm:px-6">
    <h2 class="text-2xl font-bold text-brand-900">More guides</h2>
    <ul class="mt-4 list-disc space-y-2 pl-6 text-lg text-slate-700">
        <li><a href="{{ route('page.buyers') }}" class="font-semibold text-brand-700 underline">How to avoid online shopping scams in Kenya</a></li>
        <li><a href="{{ route('page.sellers') }}" class="font-semibold text-brand-700 underline">Sell online safely and get paid on delivery</a></li>
        <li><a href="{{ route('page.social') }}" class="font-semibold text-brand-700 underline">Safe payments for Instagram, TikTok and Marketplace shops</a></li>
        <li><a href="{{ route('page.escrow') }}" class="font-semibold text-brand-700 underline">Escrow in Kenya, explained</a></li>
    </ul>
</section>
@endsection
