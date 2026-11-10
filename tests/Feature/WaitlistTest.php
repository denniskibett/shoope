<?php

beforeEach(function () {
    config(['app.url' => 'https://shoope.africa']);
    $this->waitlist = tempnam(sys_get_temp_dir(), 'waitlist').'.csv';
    config(['shoope.waitlist_path' => $this->waitlist]);
});

afterEach(function () {
    @unlink($this->waitlist);
});

function waitlistRows(string $path): array
{
    return array_map(fn ($l) => str_getcsv($l, ',', '"', ''), file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
}

it('stores a seller with a normalised Kenyan phone number and fires the signup conversion once', function () {
    $this->post('/waitlist', ['contact' => '0712 345 678', 'role' => 'seller', 'platform' => 'instagram', 'source' => 'sellers'])
        ->assertRedirect('/sell-online-safely-get-paid-on-delivery#waitlist');

    $rows = waitlistRows($this->waitlist);
    expect($rows[0])->toBe(['joined_at', 'contact', 'role', 'platform', 'source']);
    expect(array_slice($rows[1], 1))->toBe(['254712345678', 'seller', 'instagram', 'sellers']);

    $this->get('/sell-online-safely-get-paid-on-delivery')
        ->assertSee("['conversion','signup']", false)
        ->assertSee("You're on the list.", false);

    // The flash is gone on the next view: the conversion is not counted twice.
    $this->get('/sell-online-safely-get-paid-on-delivery')->assertDontSee("['conversion','signup']", false);
});

it('stores an email signup and ignores duplicates', function () {
    $this->post('/waitlist', ['contact' => 'Buyer@Example.com', 'role' => 'buyer', 'source' => 'buyers'])->assertSessionHas('waitlist_joined');
    $this->post('/waitlist', ['contact' => 'buyer@example.com', 'role' => 'both', 'source' => 'home'])->assertSessionHas('waitlist_joined');

    $rows = waitlistRows($this->waitlist);
    expect($rows)->toHaveCount(2);
    expect($rows[1][1])->toBe('buyer@example.com');
});

it('rejects invalid contact details and roles', function () {
    $this->post('/waitlist', ['contact' => 'not a phone', 'role' => 'seller'])->assertSessionHasErrors('contact');
    $this->post('/waitlist', ['contact' => '', 'role' => 'seller'])->assertSessionHasErrors('contact');
    $this->post('/waitlist', ['contact' => 'a@b.co', 'role' => 'admin'])->assertSessionHasErrors('role');

    expect(file_exists($this->waitlist) && filesize($this->waitlist) > 0)->toBeFalse();
});

it('silently drops honeypot submissions', function () {
    $this->post('/waitlist', ['contact' => 'bot@spam.test', 'role' => 'seller', 'website' => 'http://spam.test'])
        ->assertRedirect()->assertSessionMissing('waitlist_joined');

    expect(file_exists($this->waitlist) && filesize($this->waitlist) > 0)->toBeFalse();
});

it('falls back to the home page for an unknown source', function () {
    $this->post('/waitlist', ['contact' => '+254 112 345 678', 'role' => 'both', 'source' => 'https://evil.test'])
        ->assertRedirect('/#waitlist');

    expect(waitlistRows($this->waitlist)[1][1])->toBe('254112345678');
});
