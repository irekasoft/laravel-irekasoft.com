---
title: Navigation & Overlays
description: Stack navigation, full-screen modals, bottom sheets, and Android back handling in ireka-ui.
eyebrow: Framework
---

Beyond static screens, ireka-ui ships a small navigation layer: tab
stacks push and pop pages with native-feeling slide transitions, and
overlays — full-screen modals and bottom sheets — layer on top.
Everything participates in a shared back-button system so the Android
hardware back key always does the expected thing.

## Page

`Page` is the standard screen wrapper. It renders a `NavBar`, wraps the
body in a scrollable `ContentContainer`, and exposes lifecycle hooks.
Inside a tab stack the navigator passes `title`, `canGoBack`, and
`onBack` automatically, so most screens just spread them through.

```jsx
import { Page } from '../framework';
import { Card } from '../components/ui';

export default function OrdersPage({ title, canGoBack, onBack }) {
  return (
    <Page
      title={title}
      canGoBack={canGoBack}
      onBack={onBack}
      onFocus={() => console.log('screen focused')}
      onBlur={() => console.log('a child screen was pushed')}
    >
      <Card>
        <Card.Body>Page content lives here.</Card.Body>
      </Card>
    </Page>
  );
}
```

`Page` accepts `scroll` (wrap in `ContentContainer`, default `true`),
`hideNavBar`, `right` (a NavBar action slot), `background`, and the
`onMount` / `onUnmount` / `onFocus` / `onBlur` lifecycle callbacks.
`onFocus` fires on mount and each time a child screen is popped;
`onBlur` fires each time a screen is pushed on top.

## useNavigation

Inside a tab, call `useNavigation()` to drive the current stack.
`push(title, data, opts)` slides a new screen in; `pop()` slides the
top one back out. `canGoBack` reflects the stack depth.

```jsx
import { useNavigation } from '../framework';

function OrderRow({ order }) {
  const { push } = useNavigation();
  return (
    <button onClick={() => push(`Order ${order.id}`, order)}>
      Order {order.id}
    </button>
  );
}
```

Pushed screens render the same tab `component`, receiving the pushed
`title` and `data` via `useRoute()`. Pass `{ noAnimation: true }` as the
third argument to skip the slide — useful when replacing the stack after
an action like a completed checkout.

## StackNav

`StackNav` is a standalone stack navigator for flows that live outside
the tab bar — most often inside a modal. Give it an initial `component`,
then call `push(Component, props)` / `pop()` from `useStackNav()`.

```jsx
import { StackNav, useStackNav } from '../framework';

function CartPage({ cart }) {
  const { push } = useStackNav();
  return (
    <button onClick={() => push(CheckoutPage, { cart })}>
      Checkout
    </button>
  );
}

// Mount the flow:
<StackNav component={CartPage} props={{ cart }} />
```

## ModalPage

`ModalPage` presents a full-screen page above everything else. Control
it with `open` and `onClose`. `direction="up"` slides it from the bottom
(a presented modal); `direction="right"` slides it from the edge like a
pushed page, complete with edge-swipe-back on supported platforms.

```jsx
import { useState } from 'react';
import { ModalPage } from '../framework';

function NewOrderButton() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)}>New order</button>

      <ModalPage open={open} onClose={() => setOpen(false)} title="New Order" direction="up">
        <NewOrderForm onDone={() => setOpen(false)} />
      </ModalPage>
    </>
  );
}
```

Set `hideNavBar` to supply your own header, and combine `ModalPage` with
`StackNav` to run a multi-step flow inside a single modal.

## BottomSheet

`BottomSheet` slides a panel up from the bottom over a dimmed backdrop.
It's drag-dismissible — flicking it down past the threshold (or tapping
the backdrop) calls `onClose`. Best for short, contextual actions.

```jsx
import { useState } from 'react';
import { BottomSheet } from '../framework';
import { SheetAction } from '../components/ui';

function ShareButton() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)}>Share</button>

      <BottomSheet open={open} onClose={() => setOpen(false)}>
        <SheetAction onClick={() => setOpen(false)}>Copy link</SheetAction>
        <SheetAction onClick={() => setOpen(false)}>Share to…</SheetAction>
      </BottomSheet>
    </>
  );
}
```

## Android back handling

Every overlay registers itself with a shared back stack via the
`useOverlayBack(active, onBack)` hook, so the Android hardware back key
dismisses the topmost overlay first, then walks back through the page
stack, and only minimizes the app when nothing is left to close.
`ModalPage`, `BottomSheet`, and `StackNav` already wire this up — you
only need the hook when building a custom overlay.

```jsx
import { useOverlayBack } from '../framework';

function CustomOverlay({ open, onClose, children }) {
  useOverlayBack(open, onClose);
  if (!open) return null;
  return <div className="overlay">{children}</div>;
}
```

The handler is installed once at startup via `installAndroidBackHandler()`
and is a no-op on web and iOS, where the platform's own back gestures
apply.
