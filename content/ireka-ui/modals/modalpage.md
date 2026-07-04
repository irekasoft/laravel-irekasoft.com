---
id: modalpage
title: ModalPage
order: 1
summary: Present a full-screen page, sliding up or in from the edge.
---

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


# Multi-step modals

Combine `ModalPage` with `StackNav` to run a whole flow inside a single
modal — for example a cart that pushes through to checkout and a
confirmation screen without ever leaving the overlay. Keep the
`ModalPage` NavBar (don't set `hideNavBar`) and it stays fixed at the top
of the modal, giving every step a title and close button while
`StackNav` swaps the screen beneath it.

```jsx
import { ModalPage, StackNav } from '../framework';

<ModalPage open={cartOpen} title="Cart" onClose={() => setCartOpen(false)}>
  <StackNav component={CartPage} props={{ cart, onClose: () => setCartOpen(false) }} />
</ModalPage>
```

The modal registers with the shared back stack, so the Android hardware
back key — and the edge-swipe gesture — dismiss it correctly. See
[Android back handling](/ireka-ui/docs/overlays/android-back) for how
that works.
