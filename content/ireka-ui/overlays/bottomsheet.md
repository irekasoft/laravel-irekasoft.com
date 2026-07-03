---
id: bottomsheet
title: BottomSheet
order: 1
summary: A drag-dismissible panel that slides up over a dimmed backdrop.
---

`BottomSheet` slides a panel up from the bottom over a dimmed backdrop.
It's drag-dismissible — flicking it down past the threshold (or tapping
the backdrop) calls `onClose`. It takes arbitrary `children`, so it's
best for richer content like forms, details or pickers.

```jsx
import { useState } from 'react';
import { BottomSheet } from '../framework';

function SummaryButton() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)}>Review order</button>

      <BottomSheet open={open} onClose={() => setOpen(false)}>
        <h2 className="text-lg font-semibold text-neutral-900 mb-1">Order summary</h2>
        <p className="text-sm text-neutral-500 mb-4">
          Review your items before confirming.
        </p>
        <button
          onClick={() => setOpen(false)}
          className="w-full py-2.5 rounded-xl bg-neutral-900 text-sm font-medium text-white"
        >
          Confirm order
        </button>
      </BottomSheet>
    </>
  );
}
```

For a simple list of tappable actions, reach for
[ActionSheet](/ireka-ui/docs/overlays/action-sheet) instead.
