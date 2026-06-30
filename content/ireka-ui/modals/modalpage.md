---
id: modalpage
title: ModalPage
order: 1
summary: Present a full-screen page, sliding up or in from the edge.
---

Control the modal with `open` and `onClose`. `direction="up"` slides it
from the bottom (a presented modal); `direction="right"` slides it from
the edge like a pushed page, complete with edge-swipe-back on supported
platforms.

```jsx
import { useState } from 'react';
import { ModalPage } from '../framework';

function NewOrderButton() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)}>New order</button>

      <ModalPage open={open} onClose={() => setOpen(false)} title="New Order" direction="up">
        <NewOrderForm onDone={() => setOpen(false)} />
      </ModalPage>
    </>
  );
}
```

`ModalPage` renders its own `NavBar` from the `title` — a close button
for `direction="up"`, a back button for `direction="right"`. Set
`hideNavBar` to supply your own header instead.
