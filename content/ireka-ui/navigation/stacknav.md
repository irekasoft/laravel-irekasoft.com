---
id: stacknav
title: StackNav
order: 2
summary: A standalone stack navigator for flows outside the tab bar.
---

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
