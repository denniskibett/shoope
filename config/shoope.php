<?php

return [
    // Waitlist signups are appended to this CSV (no database table needed).
    'waitlist_path' => env('SHOOPE_WAITLIST_PATH', storage_path('app/private/waitlist.csv')),

    'parent' => [
        'name' => 'Sharet Africa Ltd',
        'url' => 'https://sharet.africa',
    ],

    // "More from Sharet" footer links (Shoope's own entry is left out).
    'sister_sites' => [
        ['name' => 'Sharet', 'label' => 'Payments API for Kenya', 'url' => 'https://sharet.africa'],
        ['name' => 'Breve', 'label' => 'Invoicing & M-Pesa payments for SMEs', 'url' => 'https://breve.sharet.africa'],
        ['name' => 'Aiyotickets', 'label' => 'Events & tickets in Nairobi', 'url' => 'https://aiyotickets.com'],
        ['name' => 'eServiz', 'label' => 'Home services in Nairobi', 'url' => 'https://eserviz.aiyotickets.com'],
        ['name' => 'Scharge', 'label' => 'Property & rent management', 'url' => 'https://scharge.sharet.africa'],
        ['name' => 'Sharet Loans', 'label' => 'Boda boda & e-bike loans', 'url' => 'https://loans.sharet.africa'],
    ],
];
