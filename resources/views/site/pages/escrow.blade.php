@extends('layouts.site')

@section('content')
@include('site.partials.hero', [
    'eyebrow' => 'Buyer & seller protection',
    'h1' => 'Escrow in Kenya for everyday online shopping',
    'lead' => 'Escrow has long protected big deals like land and cars. Shoope brings the same idea to a KES 1,500 pair of shoes from an Instagram shop: the money is held safely until the order is delivered.',
])

<article class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16">
    <div class="space-y-5 text-lg leading-relaxed text-slate-700">
        <h2 class="text-2xl font-bold text-brand-900">What is escrow?</h2>
        <p>Escrow is a simple agreement: a neutral party holds the buyer's payment while the deal happens, and only pays the seller when the agreed condition is met. For online shopping, that condition is delivery. Neither side has to trust a stranger, because the money is not with either of them in the middle of the deal.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">Why online shopping in Kenya needs escrow</h2>
        <p>Most social-media shops in Kenya ask for one of two things. Either “pay first, then we dispatch”, which leaves the buyer exposed if the shop is fake. Or “pay on delivery”, which leaves the seller paying riders for orders that are rejected or never picked up. Escrow sits in the middle: the buyer pays first, but the seller is only paid once delivery is confirmed.</p>
        <ul class="list-disc space-y-2 pl-6">
            <li><strong>Buyers</strong> know a fake shop can't run off with their M-Pesa.</li>
            <li><strong>Sellers</strong> know the order is real and already paid for before they dispatch.</li>
            <li><strong>Both</strong> have a record of the deal if something goes wrong.</li>
        </ul>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">How Shoope escrow will work</h2>
        <ol class="list-decimal space-y-2 pl-6">
            <li>The seller creates an order or shares a Shoope checkout link.</li>
            <li>The buyer pays with M-Pesa or card. The payment is processed by <a href="https://sharet.africa" class="font-semibold text-brand-700 underline">Sharet Pay</a> and held for the order.</li>
            <li>The seller delivers by rider, courier or pick-up.</li>
            <li>The buyer confirms delivery and the money is released to the seller. If the buyer stays silent, a time limit applies; if there is a problem, both sides can raise it before release.</li>
        </ol>
        <p>See the full walkthrough on <a href="{{ route('page.how') }}" class="font-semibold text-brand-700 underline">how Shoope works</a>.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">Escrow vs. pay on delivery vs. paying upfront</h2>
    </div>
    <div class="mt-6 overflow-x-auto">
        <table class="w-full min-w-[32rem] border-collapse text-left text-sm">
            <thead>
                <tr class="border-b-2 border-brand-200 text-slate-900">
                    <th scope="col" class="py-3 pr-4">Method</th>
                    <th scope="col" class="py-3 pr-4">Risk for the buyer</th>
                    <th scope="col" class="py-3">Risk for the seller</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-slate-700">
                <tr><th scope="row" class="py-3 pr-4 font-semibold">Pay upfront to the seller</th><td class="py-3 pr-4">High: the shop may be fake or deliver the wrong item</td><td class="py-3">Low</td></tr>
                <tr><th scope="row" class="py-3 pr-4 font-semibold">Pay on delivery</th><td class="py-3 pr-4">Low</td><td class="py-3">High: fake orders, rejected parcels, wasted rider fees</td></tr>
                <tr><th scope="row" class="py-3 pr-4 font-semibold">Escrow with Shoope</th><td class="py-3 pr-4">Low: money is held until delivery</td><td class="py-3">Low: the order is paid before dispatch</td></tr>
            </tbody>
        </table>
    </div>
    <p class="mt-8 text-lg text-slate-700">Shoope is in development. Buyers can read our <a href="{{ route('page.buyers') }}" class="font-semibold text-brand-700 underline">guide to avoiding online shopping scams</a>, and sellers can see how to <a href="{{ route('page.sellers') }}" class="font-semibold text-brand-700 underline">sell online safely and get paid on delivery</a>.</p>
</article>
@endsection
