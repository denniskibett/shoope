@extends('layouts.site')

@section('content')
<section class="bg-gradient-to-b from-brand-50 to-white">
    <div class="mx-auto grid max-w-6xl gap-12 px-4 py-14 sm:px-6 sm:py-20 lg:grid-cols-2 lg:items-center">
        <div>
            <p class="inline-flex rounded-full bg-white px-3 py-1 text-sm font-medium text-brand-800 ring-1 ring-brand-200">Coming soon · Early access open</p>
            <h1 class="mt-5 text-4xl font-extrabold tracking-tight text-brand-900 sm:text-5xl">Safe payments for online shops in Kenya</h1>
            <p class="mt-5 text-lg text-slate-600">Shoope is escrow for social shops. The buyer pays into escrow with M-Pesa or card, the seller delivers, and the money is released when the order arrives. No more “send money first” and no more fake pay-on-delivery orders.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="#waitlist" data-sa-click="hero_join" class="rounded-full bg-brand-700 px-6 py-3 text-center font-semibold text-white hover:bg-brand-800">Join the waitlist</a>
                <a href="{{ route('page.how') }}" class="rounded-full border border-slate-300 px-6 py-3 text-center font-semibold text-slate-800 hover:border-brand-600">See how it works</a>
            </div>
            <p class="mt-4 text-sm text-slate-500">For sellers on Instagram, TikTok, WhatsApp and Facebook Marketplace, and the buyers who shop with them.</p>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow-xl ring-1 ring-slate-100" aria-hidden="true">
            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Example order</p>
            <div class="mt-3 flex items-center justify-between">
                <div>
                    <p class="font-semibold text-slate-900">Ankara dress, size M</p>
                    <p class="text-sm text-slate-500">@ shop on Instagram</p>
                </div>
                <p class="text-lg font-bold text-brand-800">KES 2,500</p>
            </div>
            <ol class="mt-6 space-y-4 text-sm">
                <li class="flex gap-3"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-700 text-xs font-bold text-white">1</span><span><strong>Paid into escrow</strong> with M-Pesa via Sharet Pay</span></li>
                <li class="flex gap-3"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-700 text-xs font-bold text-white">2</span><span><strong>Seller dispatches</strong> by rider or courier</span></li>
                <li class="flex gap-3"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-200 text-xs font-bold text-brand-900">3</span><span><strong>Buyer confirms delivery</strong></span></li>
                <li class="flex gap-3"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-200 text-xs font-bold text-brand-900">4</span><span><strong>Seller is paid</strong></span></li>
            </ol>
        </div>
    </div>
</section>

<section class="py-14 sm:py-20" aria-labelledby="problem-heading">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <h2 id="problem-heading" class="max-w-2xl text-3xl font-bold tracking-tight text-brand-900">Online shopping in Kenya runs on trust. Shoope makes the trust part automatic.</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-2">
            <article class="rounded-2xl border border-slate-200 p-6">
                <h3 class="text-xl font-semibold text-slate-900">For buyers: pay without the fear</h3>
                <p class="mt-3 text-slate-600">Fake Instagram shops, sellers who block you after you pay, and items that look nothing like the photos. With Shoope your money waits in escrow until the order is in your hands.</p>
                <a href="{{ route('page.buyers') }}" class="mt-4 inline-block font-semibold text-brand-700 hover:underline">How to avoid online shopping scams in Kenya →</a>
            </article>
            <article class="rounded-2xl border border-slate-200 p-6">
                <h3 class="text-xl font-semibold text-slate-900">For sellers: get paid on delivery, for real</h3>
                <p class="mt-3 text-slate-600">Pay-on-delivery orders that never pick up, riders paid for nothing, and buyers who won't pay upfront because they don't know you. Shoope lets buyers pay first with confidence, and you get paid when you deliver.</p>
                <a href="{{ route('page.sellers') }}" class="mt-4 inline-block font-semibold text-brand-700 hover:underline">Sell online safely with Shoope →</a>
            </article>
        </div>
    </div>
</section>

<section class="bg-slate-50 py-14 sm:py-20" aria-labelledby="steps-heading">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <h2 id="steps-heading" class="text-3xl font-bold tracking-tight text-brand-900">How Shoope will work</h2>
        <ol class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <li class="rounded-2xl bg-white p-6 ring-1 ring-slate-100">
                <p class="text-sm font-bold text-brand-700">Step 1</p>
                <h3 class="mt-1 font-semibold text-slate-900">Seller shares a link</h3>
                <p class="mt-2 text-sm text-slate-600">A Shoope checkout link in the Instagram bio, TikTok profile, WhatsApp chat or Marketplace message.</p>
            </li>
            <li class="rounded-2xl bg-white p-6 ring-1 ring-slate-100">
                <p class="text-sm font-bold text-brand-700">Step 2</p>
                <h3 class="mt-1 font-semibold text-slate-900">Buyer pays into escrow</h3>
                <p class="mt-2 text-sm text-slate-600">M-Pesa or card through Sharet Pay. The seller sees the order is paid, but can't withdraw yet.</p>
            </li>
            <li class="rounded-2xl bg-white p-6 ring-1 ring-slate-100">
                <p class="text-sm font-bold text-brand-700">Step 3</p>
                <h3 class="mt-1 font-semibold text-slate-900">Seller delivers</h3>
                <p class="mt-2 text-sm text-slate-600">By boda, courier or pick-up, the way Kenyan online shops already deliver.</p>
            </li>
            <li class="rounded-2xl bg-white p-6 ring-1 ring-slate-100">
                <p class="text-sm font-bold text-brand-700">Step 4</p>
                <h3 class="mt-1 font-semibold text-slate-900">Money is released</h3>
                <p class="mt-2 text-sm text-slate-600">The buyer confirms delivery and the seller is paid. If something goes wrong, there is a fair dispute process.</p>
            </li>
        </ol>
        <p class="mt-8"><a href="{{ route('page.how') }}" class="font-semibold text-brand-700 hover:underline">Read the full walkthrough →</a></p>
    </div>
</section>

<section class="py-14 sm:py-20" aria-labelledby="platforms-heading">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <h2 id="platforms-heading" class="text-3xl font-bold tracking-tight text-brand-900">Made for the way Kenya shops online</h2>
        <p class="mt-4 max-w-3xl text-lg text-slate-600">Most online shops in Kenya don't have a website. They sell through social media and get paid by M-Pesa. Shoope doesn't replace your shop window; it adds a safe way to pay.</p>
        <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <li class="rounded-2xl border border-slate-200 p-5"><h3 class="font-semibold text-slate-900">Instagram shops</h3><p class="mt-1 text-sm text-slate-600">Checkout link in your bio and DMs.</p></li>
            <li class="rounded-2xl border border-slate-200 p-5"><h3 class="font-semibold text-slate-900">TikTok sellers</h3><p class="mt-1 text-sm text-slate-600">Turn comments and live viewers into paid orders.</p></li>
            <li class="rounded-2xl border border-slate-200 p-5"><h3 class="font-semibold text-slate-900">WhatsApp Business</h3><p class="mt-1 text-sm text-slate-600">Send a link in chat, status or catalogue.</p></li>
            <li class="rounded-2xl border border-slate-200 p-5"><h3 class="font-semibold text-slate-900">Facebook Marketplace</h3><p class="mt-1 text-sm text-slate-600">Safe deals with strangers, no meet-up cash.</p></li>
        </ul>
        <p class="mt-8"><a href="{{ route('page.social') }}" class="font-semibold text-brand-700 hover:underline">Safe payments for Instagram, TikTok and Marketplace shops →</a></p>
    </div>
</section>

<section class="border-y border-slate-100 bg-brand-50 py-14" aria-labelledby="sharet-heading">
    <div class="mx-auto max-w-4xl px-4 text-center sm:px-6">
        <h2 id="sharet-heading" class="text-2xl font-bold tracking-tight text-brand-900">Payments by Sharet Pay</h2>
        <p class="mt-4 text-slate-700">Every Shoope payment will run through <a href="https://sharet.africa" class="font-semibold text-brand-700 underline">Sharet Pay</a>, the M-Pesa and card payments service from Sharet Africa Ltd. One trusted payment rail, no third-party wallets, no cash. Learn more about <a href="{{ route('page.escrow') }}" class="font-semibold text-brand-700 underline">escrow in Kenya</a>.</p>
    </div>
</section>
@endsection
