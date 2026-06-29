---
title: Overlays
description: Bottom sheets and the shared Android back handling that ties every ireka-ui overlay together.
eyebrow: Framework
---

Overlays layer transient surfaces on top of the current screen — a
bottom sheet for quick actions, a modal for a focused task. They all
plug into a single back-button system so the Android hardware back key
always dismisses the topmost overlay first.

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
