<section class="bg-slate-50 py-14 sm:py-20" aria-labelledby="faq-heading">
    <div class="mx-auto max-w-3xl px-4 sm:px-6">
        <h2 id="faq-heading" class="text-2xl font-bold tracking-tight text-brand-900 sm:text-3xl">{{ $heading }}</h2>
        <div class="mt-8 divide-y divide-slate-200 rounded-2xl border border-slate-200 bg-white">
            @foreach ($faq as $item)
                <details class="group p-5" @if ($loop->first) open @endif>
                    <summary class="flex cursor-pointer list-none items-start justify-between gap-4 [&::-webkit-details-marker]:hidden">
                        <h3 class="text-base font-semibold text-slate-900">{{ $item['q'] }}</h3>
                        <span class="mt-1 text-brand-700 transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-3 text-slate-600">{{ $item['a'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
