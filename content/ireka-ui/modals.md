---
title: Modals
description: Full-screen modal pages in ireka-ui — presented or pushed, with multi-step flows via StackNav.
eyebrow: Framework
---

`ModalPage` presents a full-screen page above everything else. Use it
for focused tasks — creating an order, viewing a detail — that should
take over the screen and return the user exactly where they were.

## ModalPage

Control the modal with `open` and `onClose`. `direction="up"` slides it
from the bottom (a presented modal); `direction="right"` slides it from
the edge like a pushed page, complete with edge-swipe-back on supported
platforms.

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

`ModalPage` renders its own `NavBar` from the `title` — a close button
for `direction="up"`, a back button for `direction="right"`. Set
`hideNavBar` to supply your own header instead.

## Multi-step flows

Combine `ModalPage` with `StackNav` to run a whole flow inside a single
modal — for example a cart that pushes through to checkout and a
confirmation screen without ever leaving the overlay.

```jsx
import { ModalPage, StackNav } from '../framework';

<ModalPage open={cartOpen} onClose={() => setCartOpen(false)} hideNavBar>
  <StackNav component={CartPage} props={{ cart, onClose: () => setCartOpen(false) }} />
</ModalPage>
```

The modal registers with the shared back stack, so the Android hardware
back key — and the edge-swipe gesture — dismiss it correctly. See
[Overlays](/ireka-ui/docs/overlays) for how that back handling works.
