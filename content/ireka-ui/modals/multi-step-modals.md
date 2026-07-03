---
id: multi-step-modals
title: Multi-step modals
order: 2
summary: Run a multi-step flow inside one ModalPage, with its NavBar staying put while StackNav pushes each step.
---

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
