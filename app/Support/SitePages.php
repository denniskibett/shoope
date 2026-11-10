<?php

namespace App\Support;

/**
 * The public, indexable pages of shoope.africa: one place for routes, SEO
 * metadata, FAQs (rendered on the page and as FAQPage JSON-LD) and the sitemap.
 */
class SitePages
{
    public static function all(): array
    {
        return [
            'home' => [
                'path' => '/',
                'view' => 'site.pages.home',
                'nav' => 'Home',
                'title' => 'Shoope – Safe payments for online shops in Kenya | Escrow for social sellers',
                'description' => 'Shoope is escrow for Instagram, TikTok, WhatsApp and Facebook Marketplace shops in Kenya: the buyer pays into escrow, the seller is paid on delivery. Join early access.',
                'priority' => '1.0',
                'faq' => [
                    ['q' => 'What is Shoope?', 'a' => 'Shoope is an escrow checkout for people who sell on Instagram, TikTok, WhatsApp and Facebook Marketplace in Kenya. The buyer pays into escrow, the money is held while the order is delivered, and the seller is paid once delivery is confirmed.'],
                    ['q' => 'Is Shoope live?', 'a' => 'Not yet. Shoope is in development. Join the early-access waitlist and we will contact you when the first sellers and buyers can use it.'],
                    ['q' => 'How will payments work?', 'a' => 'All Shoope payments will run through Sharet Pay, the payments service of Sharet Africa Ltd, so buyers can pay with M-Pesa or card.'],
                    ['q' => 'Who is behind Shoope?', 'a' => 'Shoope is built by Sharet Africa Ltd, the Kenyan company behind the Sharet payments API.'],
                ],
            ],
            'escrow' => [
                'path' => '/escrow-kenya',
                'view' => 'site.pages.escrow',
                'nav' => 'Escrow in Kenya',
                'breadcrumb' => 'Escrow in Kenya',
                'title' => 'Escrow in Kenya for online shopping – how buyer protection works | Shoope',
                'description' => 'What escrow is, how it protects buyers and sellers who trade online in Kenya, and how Shoope will hold M-Pesa and card payments until delivery is confirmed.',
                'priority' => '0.9',
                'faq' => [
                    ['q' => 'What does escrow mean?', 'a' => 'Escrow means a neutral party holds the payment while a deal is completed. The buyer pays, the money is held, and it is only released to the seller when the agreed condition, usually delivery, is met.'],
                    ['q' => 'Is there an escrow service for online shopping in Kenya?', 'a' => 'Escrow is common for property and large deals, but rare for everyday social-media shopping. Shoope is being built to make escrow simple for small online shops that sell through Instagram, TikTok, WhatsApp and Facebook Marketplace.'],
                    ['q' => 'Can I pay into escrow with M-Pesa?', 'a' => 'Yes. Shoope payments will go through Sharet Pay, which accepts M-Pesa and card.'],
                    ['q' => 'What happens if the item never arrives?', 'a' => 'If the seller does not deliver, the payment is not released to them. Shoope is designing a clear dispute and refund process for these cases before launch.'],
                    ['q' => 'Who pays the escrow fee?', 'a' => 'Pricing will be published before launch. Early-access members will hear about it first.'],
                ],
            ],
            'social' => [
                'path' => '/safe-payments-instagram-tiktok-facebook-marketplace',
                'view' => 'site.pages.social',
                'nav' => 'Instagram, TikTok & Marketplace shops',
                'breadcrumb' => 'Social shops',
                'title' => 'Safe payments for Instagram, TikTok & Facebook Marketplace shops in Kenya | Shoope',
                'description' => 'Sell on Instagram, TikTok, WhatsApp or Facebook Marketplace? Shoope gives your shop a safe escrow checkout link so buyers trust you and you get paid on delivery.',
                'priority' => '0.9',
                'faq' => [
                    ['q' => 'How do I take safe payments on Instagram in Kenya?', 'a' => 'With Shoope you will share a checkout link in your bio or DMs. The buyer pays into escrow with M-Pesa or card, you deliver, and the money is released to you once delivery is confirmed.'],
                    ['q' => 'Does Shoope work for TikTok Shop sellers?', 'a' => 'Shoope is for sellers who close sales themselves through TikTok, Instagram, WhatsApp or Facebook Marketplace and need a trusted way to collect payment. It does not replace any platform\'s own shop features.'],
                    ['q' => 'Can I use Shoope with WhatsApp Business?', 'a' => 'Yes. You will be able to send a Shoope checkout link in any WhatsApp chat or catalogue message.'],
                    ['q' => 'Do I need a website?', 'a' => 'No. Your Shoope shop page and checkout links are enough. Your Instagram, TikTok or WhatsApp stays your shop window.'],
                ],
            ],
            'buyers' => [
                'path' => '/avoid-online-shopping-scams-kenya',
                'view' => 'site.pages.buyers',
                'nav' => 'Avoid online shopping scams',
                'breadcrumb' => 'Avoid online shopping scams',
                'title' => 'How to avoid online shopping scams in Kenya – a buyer\'s checklist | Shoope',
                'description' => 'Fake Instagram shops, "send money first" sellers and swapped items: how online shopping scams work in Kenya, the warning signs, and how to pay safely.',
                'priority' => '0.9',
                'faq' => [
                    ['q' => 'How do I know if an Instagram shop in Kenya is real?', 'a' => 'Check how old the account is, whether tagged photos come from real customers, whether the comments are switched off, and whether the price is far below the market. Ask for a video call of the item and never pay a personal number in a hurry.'],
                    ['q' => 'Is pay on delivery safe?', 'a' => 'Paying on delivery protects you from paying for nothing, but many sellers now refuse it because of fake orders. Escrow gives the same protection: you pay upfront, but the seller is only paid when you receive the order.'],
                    ['q' => 'What should I do if I was scammed online in Kenya?', 'a' => 'Contact your mobile money provider immediately with the transaction code, report the account to the platform, and report the case to the police (DCI). Keep screenshots of chats and payment messages.'],
                    ['q' => 'Can I get my M-Pesa money back after a scam?', 'a' => 'Sometimes, if you report it quickly and the funds have not been withdrawn, but it is never guaranteed. Paying through escrow avoids the problem because the seller cannot touch the money before delivery.'],
                ],
            ],
            'sellers' => [
                'path' => '/sell-online-safely-get-paid-on-delivery',
                'view' => 'site.pages.sellers',
                'nav' => 'Sell online safely',
                'breadcrumb' => 'Sell online safely',
                'title' => 'Sell online safely in Kenya and get paid on delivery | Shoope for sellers',
                'description' => 'Stop losing money to fake pay-on-delivery orders and buyers who don\'t trust you. With Shoope the buyer pays first into escrow and you are paid when the order is delivered.',
                'priority' => '0.9',
                'faq' => [
                    ['q' => 'How do I stop fake pay-on-delivery orders?', 'a' => 'Ask buyers to pay into escrow before you dispatch. The buyer knows the money is protected, and you know the order is real because it is already paid for.'],
                    ['q' => 'When will I get my money?', 'a' => 'The payment is released once delivery is confirmed. The exact payout timing to M-Pesa or bank will be published before launch.'],
                    ['q' => 'What if a buyer lies that they did not receive the item?', 'a' => 'Keep proof of delivery, such as the rider\'s confirmation or a delivery photo. Shoope is designing its dispute process so that both sides present evidence before any refund.'],
                    ['q' => 'Can small sellers join?', 'a' => 'Yes. Shoope is made for small and home-based shops that sell through social media. Join the waitlist to be among the first sellers.'],
                ],
            ],
            'how' => [
                'path' => '/how-it-works',
                'view' => 'site.pages.how',
                'nav' => 'How it works',
                'breadcrumb' => 'How it works',
                'title' => 'How Shoope works – escrow checkout for social shops in Kenya',
                'description' => 'Four steps: the seller shares a Shoope link, the buyer pays into escrow with M-Pesa or card through Sharet Pay, the seller delivers, and the money is released.',
                'priority' => '0.8',
                'faq' => [
                    ['q' => 'Do buyers need a Shoope account?', 'a' => 'The plan is to keep checkout light: a buyer pays with M-Pesa or card and confirms delivery with their phone number.'],
                    ['q' => 'Which payment methods will be supported?', 'a' => 'M-Pesa and card, through Sharet Pay. Shoope will not use any other payment provider.'],
                    ['q' => 'Who confirms delivery?', 'a' => 'The buyer confirms when the order arrives. If the buyer does not respond, a time limit will apply so sellers are not left waiting forever.'],
                ],
            ],
            'faq' => [
                'path' => '/faq',
                'view' => 'site.pages.faq',
                'nav' => 'FAQ',
                'breadcrumb' => 'FAQ',
                'title' => 'Shoope FAQ – escrow, M-Pesa payments and early access',
                'description' => 'Answers about Shoope: what escrow is, how buyers and sellers are protected, M-Pesa and card payments through Sharet Pay, fees and when Shoope launches.',
                'priority' => '0.7',
                'faq' => [
                    ['q' => 'When does Shoope launch?', 'a' => 'Shoope is in development and will open to early-access sellers and buyers first. Join the waitlist and we will let you know.'],
                    ['q' => 'Is Shoope a marketplace?', 'a' => 'No. Shoope does not list products or compete with your shop. It is the safe payment step for shops that already sell on social media.'],
                    ['q' => 'What does Shoope cost?', 'a' => 'Pricing is not final. It will be published before launch, and there is no cost to join the waitlist.'],
                    ['q' => 'Which payment providers does Shoope use?', 'a' => 'Only Sharet Pay, from Sharet Africa Ltd, which handles M-Pesa and card payments.'],
                    ['q' => 'Is Shoope only for Kenya?', 'a' => 'Shoope starts in Kenya, with M-Pesa at the centre. Other countries may follow later.'],
                    ['q' => 'What details do you keep when I join the waitlist?', 'a' => 'Only what you type in the form: your email or phone number, whether you buy or sell, and the platform you use. We use it to contact you about Shoope and nothing else.'],
                    ['q' => 'Can I protect a purchase from any online seller?', 'a' => 'Once Shoope is live, you will be able to ask any seller to send you a Shoope checkout link. If the seller refuses escrow, that is a warning sign in itself.'],
                ],
            ],
        ];
    }

    public static function get(string $key): array
    {
        $page = static::all()[$key];
        $page['key'] = $key;

        return $page;
    }

    /** Absolute canonical URL on the configured https host, no query string. */
    public static function url(string $path): string
    {
        $base = rtrim((string) config('app.url'), '/');

        return $path === '/' ? $base.'/' : $base.$path;
    }

    public static function lastmod(array $page): string
    {
        $file = resource_path('views/'.str_replace('.', '/', $page['view']).'.blade.php');

        return date('Y-m-d', is_file($file) ? filemtime($file) : time());
    }
}
