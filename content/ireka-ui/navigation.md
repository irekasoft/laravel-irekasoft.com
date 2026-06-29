---
title: Navigation
description: Stack navigation in ireka-ui — the Page wrapper, useNavigation, and standalone StackNav flows.
eyebrow: Framework
---

ireka-ui ships a small navigation layer. Each tab owns a stack of
screens that push and pop with native-feeling slide transitions, and a
`Page` wrapper gives every screen a NavBar, scrolling, and lifecycle
hooks. For flows outside the tab bar, `StackNav` provides the same stack
behaviour on its own.

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
