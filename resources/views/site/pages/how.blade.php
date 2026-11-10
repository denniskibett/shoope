@extends('layouts.site')

@section('content')
@include('site.partials.hero', [
    'eyebrow' => 'Step by step',
    'h1' => 'How Shoope works',
    'lead' => 'Shoope adds an escrow step to the way you already buy and sell on social media. Here is the journey we are building, for sellers and for buyers.',
])

<article class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16">
    <ol class="space-y-6">
        <li class="rounded-2xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-brand-900"><span class="text-brand-700">1.</span> The seller sets up a shop</h2>
            <p class="mt-2 text-slate-700">A seller signs up with a phone number, names the shop and adds how they want to be paid. No website needed.</p>
        </li>
        <li class="rounded-2xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-brand-900"><span class="text-brand-700">2.</span> The seller shares a checkout link</h2>
            <p class="mt-2 text-slate-700">For each order, the seller sends a Shoope link with the item, price and delivery details, in an Instagram DM, a TikTok comment reply, a WhatsApp chat or a Marketplace message.</p>
        </li>
        <li class="rounded-2xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-brand-900"><span class="text-brand-700">3.</span> The buyer pays into escrow</h2>
            <p class="mt-2 text-slate-700">The buyer pays with M-Pesa or card. Payments are processed by <a href="https://sharet.africa" class="font-semibold text-brand-700 underline">Sharet Pay</a> from Sharet Africa Ltd and held for that order. The seller is notified that the order is paid.</p>
        </li>
        <li class="rounded-2xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-brand-900"><span class="text-brand-700">4.</span> The seller delivers</h2>
            <p class="mt-2 text-slate-700">By boda, courier, matatu parcel service or pick-up. The seller marks the order as dispatched.</p>
        </li>
        <li class="rounded-2xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-brand-900"><span class="text-brand-700">5.</span> The buyer confirms and the seller is paid</h2>
            <p class="mt-2 text-slate-700">The buyer confirms the order arrived as described and the money is released to the seller. If the buyer doesn't respond in time, it is released automatically. If there is a problem, the buyer raises it before release and both sides can share evidence.</p>
        </li>
    </ol>
    <p class="mt-8 text-lg text-slate-700">Want the background? Read about <a href="{{ route('page.escrow') }}" class="font-semibold text-brand-700 underline">escrow in Kenya</a>, or browse the <a href="{{ route('page.faq') }}" class="font-semibold text-brand-700 underline">Shoope FAQ</a>.</p>
</article>
@endsection
