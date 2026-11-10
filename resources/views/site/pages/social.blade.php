@extends('layouts.site')

@section('content')
@include('site.partials.hero', [
    'eyebrow' => 'For social sellers',
    'h1' => 'Safe payments for Instagram, TikTok and Facebook Marketplace shops',
    'lead' => 'Your shop lives on social media. Your payments should feel as safe as a big online store. Shoope will give every social seller in Kenya an escrow checkout link that buyers can trust.',
    'cta' => 'Join as a seller',
])

<article class="mx-auto max-w-3xl px-4 py-12 sm:px-6 sm:py-16">
    <div class="space-y-5 text-lg leading-relaxed text-slate-700">
        <h2 class="text-2xl font-bold text-brand-900">The trust problem every social shop has</h2>
        <p>Buyers have heard the stories: the Instagram shop that disappeared after the M-Pesa went through, the TikTok seller who sent a different phone, the Marketplace deal that was never real. So they hesitate, ask for pay on delivery, or don't buy at all. Honest sellers lose sales because of scammers they have never met.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">One checkout link, every platform</h2>
        <p>With Shoope you will have a simple shop page and a checkout link for each order. Paste it wherever you already sell:</p>

        <h3 class="pt-2 text-xl font-semibold text-slate-900">Instagram</h3>
        <p>Put your Shoope link in your bio and send order links in DMs. Buyers who were unsure about “send to this number” can pay into escrow with M-Pesa or card instead.</p>

        <h3 class="pt-2 text-xl font-semibold text-slate-900">TikTok</h3>
        <p>When a video or live session brings in a rush of “how much?” comments, reply with a link. Viewers become paid orders without a long back-and-forth about whether you are legit.</p>

        <h3 class="pt-2 text-xl font-semibold text-slate-900">Facebook Marketplace</h3>
        <p>Deals with strangers are where buyers worry most. Escrow means neither side carries cash to a meet-up or sends money to an unknown number.</p>

        <h3 class="pt-2 text-xl font-semibold text-slate-900">WhatsApp Business</h3>
        <p>Share links in chats, status updates and your catalogue. Repeat customers get the same protection as new ones.</p>

        <h2 class="pt-4 text-2xl font-bold text-brand-900">What sellers get</h2>
        <ul class="list-disc space-y-2 pl-6">
            <li>Buyers who pay before you dispatch, because their money is protected.</li>
            <li>Fewer fake orders and rejected parcels.</li>
            <li>Payouts once delivery is confirmed, through <a href="https://sharet.africa" class="font-semibold text-brand-700 underline">Sharet Pay</a>.</li>
            <li>A clear record of every order if a buyer raises a problem.</li>
        </ul>
        <p>Shoope is not a marketplace and won't list your products or take your customers. It is only the safe payment step. Read more about <a href="{{ route('page.sellers') }}" class="font-semibold text-brand-700 underline">selling online safely</a> or <a href="{{ route('page.escrow') }}" class="font-semibold text-brand-700 underline">how escrow works in Kenya</a>.</p>
    </div>
</article>
@endsection
