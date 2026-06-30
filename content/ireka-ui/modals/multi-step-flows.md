---
id: multi-step-flows
title: Multi-step flows
order: 2
summary: Run a whole flow inside one modal with StackNav.
---

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
[Android back handling](/ireka-ui/docs/overlays/android-back) for how
that works.
