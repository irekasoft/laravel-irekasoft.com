---
id: snackbar
name: Snackbar
order: 12
summary: Inline feedback bar with an optional action.
lead: A compact status bar with a message and an optional action button. Pair it with SnackbarOverlay for a floating, swipe-to-dismiss toast.
---

```html
<div class="flex items-center justify-between gap-4 rounded-xl bg-neutral-500 px-4 py-3.5 text-sm text-white shadow-lg">
  <div class="flex min-w-0 flex-1 items-center gap-3">
    <i class="bi bi-check-circle shrink-0"></i>
    <p class="min-w-0 flex-1 leading-snug">Item added to cart</p>
  </div>
  <button class="shrink-0 font-semibold">Undo</button>
</div>
```

```jsx
import { CheckCircle2 } from 'lucide-react';

<Snackbar
  message="Item added to cart"
  icon={<CheckCircle2 size={18} />}
  actionLabel="Undo"
  onAction={() => {}}
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| message | ReactNode | | The status text. |
| icon | ReactNode | | Optional leading icon. |
| actionLabel | string | | Optional trailing action button label. |
| onAction | `() => void` | | Called when the action is tapped. |
| size | `'default' \| 'overlay'` | `'default'` | Padding / scale preset. |
| className | string | `''` | Extra classes. |
