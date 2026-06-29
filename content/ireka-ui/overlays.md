---
title: Overlays
description: Bottom sheets, dropdown menus, alerts, popups, HUDs and toasts — plus the shared Android back handling that ties them together.
eyebrow: Framework
---

Overlays layer transient surfaces on top of the current screen. Some are
**dismissible** — bottom sheets, dropdown menus, alerts and popups wait
for the user and plug into a single back-button system. Others are
**feedback** — HUDs and toasts appear, then auto-dismiss on their own.
This page covers both, and the back handling that keeps them in order.

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

## Alert

`Alert` is the centered, iOS-style confirmation dialog over a dimmed
backdrop. Drive it with `open` / `onClose` and a `buttons` array — each
button fires its `onPress` and then closes the alert. One or two buttons
sit side by side; three or more stack vertically.

```jsx
import { useState } from 'react';
import { Alert } from '../components/ui';

function DeleteButton() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)}>Delete</button>

      <Alert
        open={open}
        onClose={() => setOpen(false)}
        title="Delete order?"
        message="This can't be undone."
        buttons={[
          { label: 'Cancel', variant: 'cancel' },
          { label: 'Delete', variant: 'destructive', onPress: () => removeOrder() },
        ]}
      />
    </>
  );
}
```

Button `variant` accepts `destructive` (red) and `cancel` (muted);
omitting it gives the default tint.

## Popup

`Popup` is an attention-grabbing promotional modal with an image, title,
body and a stack of action buttons. `variant="card"` centres a square
illustration; `variant="hero"` runs a full-width image across the top.
Tapping the backdrop or the close button dismisses it.

```jsx
import { useState } from 'react';
import { Popup } from '../components/ui';

function Promo() {
  const [open, setOpen] = useState(true);
  return (
    <Popup
      open={open}
      onClose={() => setOpen(false)}
      variant="hero"
      image="/promo.jpg"
      title="Double points week"
      body="Earn 2× rewards on every order until Sunday."
      buttons={[
        { label: 'Order now', variant: 'primary', onPress: () => goToMenu() },
        { label: 'Maybe later', variant: 'ghost' },
      ]}
    />
  );
}
```

Button `variant` accepts `primary`, `secondary`, `destructive`, `green`
and `ghost`.

## HUD

`HUD` is the centered heads-up indicator — a blurred dark tile with an
icon and label. `type` is `done`, `error`, `info`, or `loading`. The
first three auto-dismiss after ~1.8s (firing `onClose`); `loading` spins
until you set `open={false}` yourself.

```jsx
import { useState } from 'react';
import { HUD } from '../components/ui';

function SaveButton() {
  const [saving, setSaving] = useState(false);
  const [done, setDone] = useState(false);

  async function save() {
    setSaving(true);
    await persist();
    setSaving(false);
    setDone(true);
  }

  return (
    <>
      <button onClick={save}>Save</button>
      <HUD open={saving} type="loading" label="Saving…" />
      <HUD open={done} type="done" label="Saved" onClose={() => setDone(false)} />
    </>
  );
}
```

## Toast

`Toast` is the global, stacked notification that drops in from the top.
The `ToastProvider` is already mounted at the app root, so any component
can fire one through the `useToast()` hook — no local state to manage.
Each toast auto-dismisses (default 3s) and can be swiped away.

```jsx
import { useToast } from '../components/ui/Toast';

function CheckoutButton() {
  const toast = useToast();
  return (
    <button onClick={() => toast.success('Order placed', 'We\'ll text you when it\'s ready')}>
      Place order
    </button>
  );
}
```

`useToast()` returns `success`, `error`, and `info` helpers
`(title, message, opts)`, plus a lower-level `show({ variant, title,
message, duration })`.

## ToastOverlay

`ToastOverlay` is a lightweight, local pill toast — good for a quick
inline message scoped to one screen rather than the whole app. Render it
inside a `relative` container and feed it a `message`; it slides in from
the `top` (default) or `bottom` and hides itself after ~2s.

```jsx
import { useState } from 'react';
import ToastOverlay from '../components/ui/ToastOverlay';

function CopyRow() {
  const [msg, setMsg] = useState(null);
  return (
    <div className="relative">
      <button onClick={() => setMsg({ text: 'Copied', id: Date.now() })}>
        Copy code
      </button>
      <ToastOverlay message={msg} position="bottom" />
    </div>
  );
}
```

Pass an `{ text, id }` object (rather than a bare string) when the same
message may repeat — changing the `id` re-triggers the animation.

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
