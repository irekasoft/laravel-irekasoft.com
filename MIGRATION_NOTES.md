# iReka Soft — Laravel rebuild

Migrated from the old WordPress/WooCommerce site (irekasoft.com) to Laravel 13.

## What changed (and why)

The old site led with "iOS and Android mobile apps developer based in Cyberjaya" and a
grid of small 2016-era utility apps. That undersells what's actually happening now, so
the rebuild repositions around **Orderla** as the flagship product, with iReka Soft as
the studio behind it:

- **Home** — leads with Orderla, not "hire us for apps." Signature section is a
  menu-board-style listing of the three Orderla products (a nod to the F&B/commerce
  space Orderla actually serves).
- **Products** (`/products`) — Orderla.my, Orderla.co, Orderla FOS in detail, with the
  old iOS apps (FaceClock Pro, Nightstand, etc.) kept as a small "heritage" section
  instead of the headline.
- **Services** (`/services`) — reframed from generic dev-shop language to
  "what we do beyond Orderla": product strategy, UI/UX, engineering, and the
  commerce-infra bits (WhatsApp API, payments, POS printing) you've actually built.
- **About** — same facts as the old `/about` page, rewritten to drop the "by 2020"
  vision language and the Malaysia-only framing.
- **Contact** — kept email, WhatsApp, and the social links that are still realistically
  live. Dropped Skype, Google Hangouts, Tumblr, Vimeo, and Speaker Deck — all dead or
  near-dead platforms that just create stale links on a "global company" site.

Design direction: dark ink-teal + warm gold/terracotta accents (spice-market, kedai
signage tones — grounded in the commerce/F&B world Orderla serves), Space Grotesk for
headlines, IBM Plex Sans for body, Space Mono for labels. Fonts load via Bunny Fonts
(self-hosted-friendly, no Google Fonts dependency), per Laravel 13's default.

## A heads-up on how this was built

My sandbox can reach GitHub and npm's registry, but **not Packagist** — so I cloned the
real `laravel/laravel` 13.x skeleton from GitHub (genuine `composer.json`,
`bootstrap/app.php`, configs, etc.) and hand-wrote the app-level code on top: routes,
`PageController`, the five Blade views, and the Tailwind v4 theme tokens. I verified the
Vite/Tailwind build compiles cleanly with `npm install && npm run build` — the only
failure I hit in-sandbox was Bunny Fonts being blocked by my own network allowlist
(unrelated to your machine). I could **not** run `composer install`, so the PHP side is
unverified by an actual interpreter — review it before deploying, though it follows
standard Laravel 13 conventions throughout.

## Setup

```bash
composer install
npm install
npm run build      # or `npm run dev` while working locally
cp .env.example .env
php artisan key:generate
php artisan serve
```

No database, mail, or auth is wired up — this is a static brochure site (5 routes,
no forms). Add `.env` values only if you bring in a contact form or queue later.

## Routes

| Path        | View                          |
|-------------|-------------------------------|
| `/`         | `pages.home`                  |
| `/about`    | `pages.about`                 |
| `/products` | `pages.products`               |
| `/services` | `pages.services`              |
| `/contact`  | `pages.contact`               |

## Things worth double-checking before launch

- Phone/WhatsApp number, office address, and social handles were carried over as-is
  from the old site — confirm they're still current.
- Company registration number: the old site showed two different formats
  (`002435676-P` on the About page, `201503132920` in the footer) — likely the
  pre/post-2017 SSM format change, but worth confirming which one belongs in the new
  footer.
- "Orderla FOS" is marked "In active development" on `/products` — change that copy
  once it's live.
