@php
  $quickInstall = <<<'BASH'
# inside the ireka-ui-web project
npm install
npm run dev
BASH;

  $quickUsage = <<<'JSX'
import { Button, Badge, Card } from './components/ui';

export default function Example() {
  return (
    <Card>
      <Card.Header
        title="Order #1024"
        trailing={<Badge label="Paid" variant="green" />}
      />
      <Card.Body>Two items · RM 38.00</Card.Body>
      <Card.Footer>
        <Button variant="primary">Track order</Button>
      </Card.Footer>
    </Card>
  );
}
JSX;

  $structureTree = <<<'TEXT'
src/
├── App.jsx              # BrowserRouter + route table
├── AppShell.jsx         # Shared layout wrapper
├── pages/
│   ├── HomePage.jsx
│   ├── OrdersPage.jsx
│   └── SettingsPage.jsx
└── components/
    └── ui/              # ireka-ui components
TEXT;

  $structureApp = <<<'JSX'
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import AppShell from './AppShell';
import HomePage from './pages/HomePage';
import OrdersPage from './pages/OrdersPage';
import SettingsPage from './pages/SettingsPage';

export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route element={<AppShell />}>
          <Route index element={<HomePage />} />
          <Route path="orders" element={<OrdersPage />} />
          <Route path="settings" element={<SettingsPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}
JSX;

  $structureShell = <<<'JSX'
import { Outlet } from 'react-router-dom';
import { ContentContainer } from './components/ui';

export default function AppShell() {
  return (
    <ContentContainer>
      <Outlet />
    </ContentContainer>
  );
}
JSX;

  $structurePage = <<<'JSX'
import { Card, SectionLabel } from '../components/ui';

export default function OrdersPage() {
  return (
    <>
      <SectionLabel>Orders</SectionLabel>
      <Card>
        <Card.Body>Page content lives here.</Card.Body>
      </Card>
    </>
  );
}
JSX;

  $features = [
    ['icon' => 'bi-phone',       'title' => 'Mobile-first',   'body' => 'Touch-sized targets, sheets, segmented controls and swipeable carousels — tuned for phones, comfortable on the web.'],
    ['icon' => 'bi-feather',     'title' => 'Featherweight',  'body' => 'Plain React function components. No context to wire up, no theme provider, no runtime beyond Tailwind utility classes.'],
    ['icon' => 'bi-palette',     'title' => 'Tailwind native','body' => 'Styled entirely with Tailwind v4. Override anything with a className — no fighting specificity.'],
    ['icon' => 'bi-layers',      'title' => 'Capacitor ready','body' => 'Ships inside the same shell that powers our iOS and Android builds, so what you see is what runs on device.'],
  ];
@endphp

<x-ireka-ui.shell
  title="ireka-ui"
  description="ireka-ui — a small, mobile-first React component library by iReka Soft, built on Tailwind CSS and Capacitor."
  active="intro"
  :components="$components">

  <div id="introduction" class="max-w-3xl scroll-mt-24">
    <p class="inline-flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-[0.16em] text-terracotta">
      <i class="bi bi-stars" aria-hidden="true"></i> Component Library
    </p>
    <h1 class="mt-3 font-mono text-4xl font-semibold tracking-tight text-ink md:text-5xl">ireka-ui</h1>
    <p class="mt-5 text-lg leading-relaxed text-charcoal/70">
      A small, mobile-first React component library.
      Built on Tailwind&nbsp;CSS and designed to feel native inside Capacitor shells, with clean
      defaults and almost no API surface to learn.
    </p>

    <div class="mt-7 flex flex-wrap gap-3">
      <a href="{{ route('ireka-ui.components') }}"
        class="inline-flex items-center gap-2 rounded-xl bg-ink px-4 py-2.5 text-sm font-medium text-paper transition-colors hover:bg-ink-soft">
        Browse components <i class="bi bi-arrow-right" aria-hidden="true"></i>
      </a>
      
    </div>
  </div>

  {{-- Structure --}}
  <section id="structure" class="mt-14 max-w-3xl scroll-mt-24">
    <h2 class="font-display text-2xl font-semibold tracking-tight text-ink">Structure</h2>
    <p class="mt-3 leading-relaxed text-charcoal/70">
      ireka-ui apps follow a simple layout: an <strong class="font-medium text-ink">AppShell</strong> wraps every
      screen, each route renders a page component from <strong class="font-medium text-ink">pages/</strong>, and
      <strong class="font-medium text-ink">react-router-dom</strong> handles navigation between them.
    </p>

    <div class="mt-5">
      <x-ireka-ui.code-block language="text" :code="$structureTree" />
    </div>

    <p class="mt-6 leading-relaxed text-charcoal/70">
      <strong class="font-medium text-ink">App.jsx</strong> defines the route table.
      Nested routes share <strong class="font-medium text-ink">AppShell</strong>, which renders an
      <code class="rounded bg-charcoal/5 px-1.5 py-0.5 font-mono text-[12px] text-ink">&lt;Outlet /&gt;</code>
      where the active page appears.
    </p>
    <div class="mt-4 space-y-4">
      <x-ireka-ui.code-block language="jsx" :code="$structureApp" />
      <x-ireka-ui.code-block language="jsx" :code="$structureShell" />
    </div>

    <p class="mt-6 leading-relaxed text-charcoal/70">
      Pages are plain React components — one file per screen, importing ireka-ui primitives as needed.
    </p>
    <div class="mt-4">
      <x-ireka-ui.code-block language="jsx" :code="$structurePage" />
    </div>
  </section>

  {{-- Features --}}
  <div class="mt-12 grid gap-4 sm:grid-cols-2">
    @foreach ($features as $f)
      <div class="rounded-xl border border-charcoal/10 bg-white p-5">
        <span class="mb-3 grid h-9 w-9 place-items-center rounded-lg bg-ink text-paper">
          <i class="bi {{ $f['icon'] }} text-base" aria-hidden="true"></i>
        </span>
        <p class="font-display text-[15px] font-semibold text-ink">{{ $f['title'] }}</p>
        <p class="mt-1 text-sm leading-relaxed text-charcoal/60">{{ $f['body'] }}</p>
      </div>
    @endforeach
  </div>

  {{-- Quick start --}}
  <h2 class="mt-14 font-display text-2xl font-semibold tracking-tight text-ink">Quick start</h2>
  <p class="mt-3 leading-relaxed text-charcoal/70">
    Every component is exported from a single barrel file. Import what you need and drop it in.
  </p>
  <div class="mt-5 space-y-4">
    {{-- <x-ireka-ui.code-block language="bash" :code="$quickInstall" /> --}}
    <x-ireka-ui.code-block :code="$quickUsage" />
  </div>

  {{-- Index --}}
  <h2 class="mt-14 font-display text-2xl font-semibold tracking-tight text-ink">What's inside</h2>
  <p class="mt-3 leading-relaxed text-charcoal/70">
    {{ count($components) }} components and counting — here's the full set.
    <a href="{{ route('ireka-ui.components') }}" class="text-ink underline underline-offset-2">See them in action</a>.
  </p>
  <div class="mt-5 grid gap-2 sm:grid-cols-2">
    @foreach ($components as $c)
      <a href="{{ route('ireka-ui.components') }}#{{ $c['id'] }}"
        class="group flex items-start gap-3 rounded-xl border border-charcoal/10 bg-white px-4 py-3 transition-colors hover:border-charcoal/30">
        <div class="min-w-0">
          <p class="font-mono text-[13px] text-ink">{{ $c['name'] }}</p>
          <p class="mt-0.5 text-xs text-charcoal/50">{{ $c['summary'] }}</p>
        </div>
        <i class="bi bi-arrow-right ml-auto mt-0.5 text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
      </a>
    @endforeach
  </div>


</x-ireka-ui.shell>
