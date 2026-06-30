---
id: bottomsheet
title: BottomSheet
order: 1
summary: A drag-dismissible panel that slides up over a dimmed backdrop.
---

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
