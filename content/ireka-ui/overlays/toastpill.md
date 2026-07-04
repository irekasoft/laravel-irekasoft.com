---
id: toastpill
title: ToastPill
order: 8
summary: A lightweight, non-blocking pill toast that slides in from the top or bottom.
---

`ToastPill` is a lightweight, non-blocking pill toast — good for a quick
confirmation like "Copied" or "Saved". It portals to the top of the app
and slides in from the `top` (default) or `bottom`, auto-hiding after
~2s. It can also be swiped away.

```jsx
import { useState } from 'react';
import { Check } from 'lucide-react';
import ToastPill from '../components/ui/ToastPill';

function CopyRow() {
  const [msg, setMsg] = useState(null);
  return (
    <>
      <button onClick={() => setMsg({ text: 'Copied', id: Date.now() })}>
        Copy code
      </button>
      <ToastPill message={msg} icon={<Check size={16} />} position="bottom" />
    </>
  );
}
```

Pass an `{ text, id }` object (rather than a bare string) when the same
message may repeat — changing the `id` re-triggers the slide-in. Top
toasts anchor below the nav bar and bottom toasts above the tab bar; use
`belowNavBar` / `belowTabBar` to opt out, or `topInset` for a custom
offset. An `onDismiss` callback fires once the pill has hidden.
