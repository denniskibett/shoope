@extends('layouts.site')

@section('content')
@include('site.partials.hero', [
    'eyebrow' => 'For sellers',
    'h1' => 'Sell online safely and get paid on delivery',
    'lead' => 'You shouldn\'t have to choose between scaring buyers away with “pay first” and losing money on fake pay-on-delivery orders. With Shoope, the buyer pays first into escrow and you are paid when you deliver.',
    'cta' => 'Join as a seller',
])

<article class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16">
    <div class="space-y-5 text-lg leading-relaxed text-slate-700">
        <h2 class="text-2xl font-bold text-brand-900">The pay-on-delivery problem</h2>
        <p>Pay on delivery wins buyers' trust, but sellers carry all the risk: the order that was “just checking”, the buyer who isn't picking up when the rider arrives, the parcel rejected at the door, and the delivery fee you pay either way. For a small shop, a few of those a week wipes out the profit.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">The “pay first” problem</h2>
        <p>Asking for payment upfront protects you, but many buyers have been burned by fake shops and simply won't do it for a seller they don't know yet. You lose real customers because of other people's scams.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">Escrow: paid first, released on delivery</h2>
        <p>Shoope will let you send a checkout link for each order. The buyer pays with M-Pesa or card through <a href="https://sharet.africa" class="font-semibold text-brand-700 underline">Sharet Pay</a>. You see the order is paid and dispatch with confidence. When the buyer confirms delivery, the money is released to you.</p>
        <ul class="list-disc space-y-2 pl-6">
            <li><strong>No more fake orders:</strong> every order you dispatch is already paid for.</li>
            <li><strong>More buyers say yes:</strong> they know a scammer couldn't take their money.</li>
            <li><strong>Proof for every sale:</strong> a record of what was ordered, paid and delivered.</li>
            <li><strong>Fair disputes:</strong> both sides present evidence before any refund.</li>
        </ul>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">Tips to sell safely today</h2>
        <ul class="list-disc space-y-2 pl-6">
            <li>Never release goods on the strength of an SMS alone; check your M-Pesa balance or statement.</li>
            <li>Keep proof of delivery: the rider's confirmation, a photo at hand-over, or a signed slip.</li>
            <li>Show real photos and short videos of your stock so buyers can tell you apart from copy-paste fake shops.</li>
            <li>Use one consistent business name and payment number across Instagram, TikTok and WhatsApp.</li>
        </ul>
        <p>Shoope works with the platforms you already sell on. See <a href="{{ route('page.social') }}" class="font-semibold text-brand-700 underline">safe payments for Instagram, TikTok and Marketplace shops</a> and <a href="{{ route('page.how') }}" class="font-semibold text-brand-700 underline">how Shoope works</a>.</p>
    </div>
</article>
@endsection
