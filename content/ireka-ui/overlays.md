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

## DropdownMenu

`DropdownMenu` anchors a small menu to the top-right of the screen over a
light scrim — the overlay for a NavBar "more" button. Control it with
`open` and `onClose`, and fill it with `DropdownMenu.Item` rows. Tapping
the scrim, choosing an item, or pressing back dismisses it.

```jsx
import { useState } from 'react';
import { MoreVertical } from 'lucide-react';
import DropdownMenu from '../components/ui/DropdownMenu';

function ProfileMenu() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)} aria-label="More">
        <MoreVertical size={20} />
      </button>

      <DropdownMenu open={open} onClose={() => setOpen(false)}>
        <DropdownMenu.Item label="Edit"   onClick={() => setOpen(false)} />
        <DropdownMenu.Item label="Share"  onClick={() => setOpen(false)} />
        <DropdownMenu.Item label="Delete" danger onClick={() => setOpen(false)} />
      </DropdownMenu>
    </>
  );
}
```

Each `DropdownMenu.Item` takes a `label`, an `onClick`, and an optional
`danger` flag that tints destructive actions red. Like every overlay it
registers with the shared back stack and locks interaction underneath
while open.

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
