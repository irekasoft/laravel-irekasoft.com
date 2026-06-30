---
id: toastoverlay
title: ToastOverlay
order: 7
summary: A lightweight local pill toast scoped to one screen.
---

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
