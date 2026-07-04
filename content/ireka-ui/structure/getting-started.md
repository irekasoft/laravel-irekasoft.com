---
title: Getting Started
description: Install ireka-ui, run the dev server, mount the shell and overlay hosts, then build your first screen.
eyebrow: Guide
---

ireka-ui is a small, mobile-first React component library built on
Tailwind CSS. It's the same source that ships — unchanged — inside the
Capacitor shell behind our iOS and Android apps, so what you build in
the browser is what runs on device. This guide takes you from an empty
project to your first screen.

## Install

Install dependencies and start the Vite dev server — the app runs in the
browser during development.

```bash
npm install
npm run dev
```

## Wrap your app

In **main.jsx**, mount the app inside the provider stack and the
`AppShell` — the shared frame every screen renders inside. Pass
`isMobile` to constrain it to a phone-sized column.

```jsx
import { StrictMode } from 'react';
import { createRoot } from 'react-dom/client';
import { AppShell } from './framework';
import { LanguageProvider } from './i18n/LanguageContext';
import { ToastProvider } from './components/ui/Toast';
import './index.css';
import App from './App.jsx';

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <LanguageProvider>
      <ToastProvider>
        <AppShell isMobile disableTextSelection>
          <App />
        </AppShell>
      </ToastProvider>
    </LanguageProvider>
  </StrictMode>,
);
```

## Enable the overlays

`Alert` and `Snackbar` are imperative — you call `Alert.show()` or
`Snackbar.show()` from anywhere. Mount their hosts once, inside the
shell, so those calls have somewhere to render.

```jsx
import { AppShell } from './framework';
import { Alert, Snackbar } from './components/ui';

<AppShell isMobile disableTextSelection>
  <App />
  <Alert.Host />
  <Snackbar.Host />
</AppShell>
```

## Build a screen

Pages are plain React components — import the primitives you need and
compose. Wrap scrollable content in `ContentContainer`.

```jsx
import { ContentContainer, SectionLabel, Card, Button } from './components/ui';

export default function HomePage() {
  return (
    <ContentContainer>
      <SectionLabel>Today</SectionLabel>
      <Card>
        <Card.Header title="Welcome to ireka-ui" />
        <Card.Body>Compose screens from small, mobile-first pieces.</Card.Body>
        <Card.Footer>
          <Button variant="primary">Get started</Button>
        </Card.Footer>
      </Card>
    </ContentContainer>
  );
}
```

## Next steps

Read [Structure](/ireka-ui/docs/structure) for how a full app is laid
out, browse the [Components](/ireka-ui/docs/components) reference, or
explore the navigation, modal and overlay patterns.
