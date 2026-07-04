---
id: android-back
title: Android back handling
order: 9
summary: The shared back stack that ties every overlay together.
---

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
