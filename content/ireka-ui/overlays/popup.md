---
id: popup
title: Popup
order: 5
summary: An attention-grabbing promotional modal with image and actions.
---

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
