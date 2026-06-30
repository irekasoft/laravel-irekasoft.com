---
id: alert
title: Alert
order: 3
summary: A centered, iOS-style confirmation dialog.
---

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
