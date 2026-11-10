@php($roles = \App\Http\Controllers\WaitlistController::ROLES)
@php($platforms = \App\Http\Controllers\WaitlistController::PLATFORMS)
<section id="waitlist" class="scroll-mt-20 bg-brand-900 py-14 text-white sm:py-20" aria-labelledby="waitlist-heading">
    <div class="mx-auto grid max-w-6xl gap-10 px-4 sm:px-6 lg:grid-cols-2 lg:items-center">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-brand-200">Early access</p>
            <h2 id="waitlist-heading" class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">Be first to sell and buy with Shoope</h2>
            <p class="mt-4 text-lg text-slate-200">Shoope is being built now. Join the waitlist and we will contact you when early access opens for sellers and buyers in Kenya. Joining is free.</p>
        </div>

        @if (session('waitlist_status') === 'ok')
            <div class="rounded-2xl bg-white p-6 text-slate-800" role="status">
                <p class="text-xl font-semibold text-brand-800">You're on the list.</p>
                <p class="mt-2 text-slate-600">Thank you. We will reach out when Shoope opens. In the meantime, share Shoope with a seller who could use it.</p>
            </div>
        @else
            <form method="POST" action="{{ route('waitlist.store') }}" class="rounded-2xl bg-white p-6 text-slate-800 shadow-xl" novalidate>
                @csrf
                <input type="hidden" name="source" value="{{ $page['key'] }}">
                <div class="hidden" aria-hidden="true">
                    <label for="wl-website">Leave this empty</label>
                    <input id="wl-website" type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <label for="wl-contact" class="block text-sm font-semibold">Email or phone number</label>
                <input id="wl-contact" name="contact" type="text" inputmode="email" autocomplete="email" required maxlength="120"
                       value="{{ old('contact') }}" placeholder="you@example.com or 0712 345 678"
                       class="mt-1 w-full rounded-lg border-slate-300 focus:border-brand-600 focus:ring-brand-600"
                       @error('contact') aria-invalid="true" aria-describedby="wl-contact-error" @enderror>
                @error('contact')<p id="wl-contact-error" class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror

                <fieldset class="mt-4">
                    <legend class="text-sm font-semibold">I am joining as</legend>
                    <div class="mt-2 flex flex-wrap gap-2">
                        @foreach ($roles as $value => $label)
                            <label class="flex cursor-pointer items-center gap-2 rounded-full border border-slate-300 px-3 py-1.5 text-sm has-[:checked]:border-brand-700 has-[:checked]:bg-brand-50">
                                <input type="radio" name="role" value="{{ $value }}" class="text-brand-700 focus:ring-brand-600"
                                       @checked(old('role', $page['key'] === 'buyers' ? 'buyer' : 'seller') === $value)>
                                {{ $label }}
                            </label>
                        @endforeach
                    </div>
                    @error('role')<p class="mt-1 text-sm text-red-700">{{ $message }}</p>@enderror
                </fieldset>

                <label for="wl-platform" class="mt-4 block text-sm font-semibold">Where do you shop or sell most? <span class="font-normal text-slate-500">(optional)</span></label>
                <select id="wl-platform" name="platform" class="mt-1 w-full rounded-lg border-slate-300 focus:border-brand-600 focus:ring-brand-600">
                    <option value="">Choose one</option>
                    @foreach ($platforms as $value => $label)
                        <option value="{{ $value }}" @selected(old('platform') === $value)>{{ $label }}</option>
                    @endforeach
                </select>

                <button type="submit" data-sa-click="waitlist_submit" class="mt-6 w-full rounded-full bg-brand-700 px-5 py-3 font-semibold text-white hover:bg-brand-800 focus:outline-none focus:ring-2 focus:ring-brand-600 focus:ring-offset-2">Join the waitlist</button>
                <p class="mt-3 text-xs text-slate-500">We only use these details to tell you about Shoope. No spam.</p>
            </form>
        @endif
    </div>
</section>
