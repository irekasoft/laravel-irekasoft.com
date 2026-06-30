---
id: toast
title: Toast
order: 6
summary: Global, stacked notifications fired from anywhere via useToast.
---

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
