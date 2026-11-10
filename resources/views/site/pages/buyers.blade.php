@extends('layouts.site')

@section('content')
@include('site.partials.hero', [
    'eyebrow' => 'For buyers',
    'h1' => 'How to avoid online shopping scams in Kenya',
    'lead' => 'Social media has made it easy to buy from small shops, and just as easy for scammers to pose as one. Here are the scams Kenyan shoppers run into most, the warning signs, and how to pay without risking your money.',
    'cta' => 'Join as a buyer',
])

<article class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16">
    <div class="space-y-5 text-lg leading-relaxed text-slate-700">
        <h2 class="text-2xl font-bold text-brand-900">Common online shopping scams</h2>
        <h3 class="pt-2 text-xl font-semibold text-slate-900">The fake shop</h3>
        <p>An Instagram or TikTok account with beautiful photos (often copied from real shops), prices well below the market and pressure to pay quickly. Once you send the money, the account blocks you or vanishes.</p>
        <h3 class="pt-2 text-xl font-semibold text-slate-900">“Send delivery fee first”</h3>
        <p>The seller asks for a small fee for the rider or “clearance” before dispatch, then another, then another. The item never comes.</p>
        <h3 class="pt-2 text-xl font-semibold text-slate-900">The swap</h3>
        <p>The shop is real, but what arrives is a cheaper copy, the wrong size, or a used item sold as new, and the seller stops replying.</p>
        <h3 class="pt-2 text-xl font-semibold text-slate-900">The fake payment confirmation</h3>
        <p>On Facebook Marketplace and in WhatsApp groups, the scam can run the other way too: a “buyer” sends an edited M-Pesa message and asks for change or the item.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">Warning signs before you pay</h2>
        <ul class="list-disc space-y-2 pl-6">
            <li>The price is far below what other shops charge for the same item.</li>
            <li>The account is new, or comments are turned off.</li>
            <li>Photos have other shops' watermarks or show up in a reverse image search.</li>
            <li>The seller refuses a video call showing the actual item.</li>
            <li>You are asked to send money to a personal number and rushed with “only one left”.</li>
            <li>The seller refuses any protected way of paying.</li>
        </ul>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">A safer way to pay</h2>
        <p>The safest deal is one where the seller can't touch your money until you have your order. That is what escrow does. With Shoope you will pay with M-Pesa or card through <a href="https://sharet.africa" class="font-semibold text-brand-700 underline">Sharet Pay</a>, the money is held for your order, and it is only released to the seller after delivery. If a seller won't accept escrow, ask yourself why. Learn more about <a href="{{ route('page.escrow') }}" class="font-semibold text-brand-700 underline">escrow in Kenya</a>.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">If you have already been scammed</h2>
        <ol class="list-decimal space-y-2 pl-6">
            <li>Contact your mobile money provider or bank straight away with the transaction code. Speed matters.</li>
            <li>Screenshot the chats, the account page and the payment messages before they disappear.</li>
            <li>Report the account to Instagram, TikTok, Facebook or WhatsApp so others are warned.</li>
            <li>Report the case to the police (DCI) with your evidence.</li>
        </ol>
    </div>
</article>
@endsection
