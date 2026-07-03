---
id: snackbar
name: Snackbar
order: 12
summary: Imperative floating toast with an optional action.
lead: A floating status toast you trigger imperatively. Call Snackbar.show() from anywhere — it slides in, takes a status icon and an action, and swipes away to dismiss.
---

```html
<div class="flex min-h-[64px] items-center justify-between gap-4 rounded-2xl bg-neutral-500 px-5 py-4 text-base text-white shadow-lg">
  <div class="flex min-w-0 flex-1 items-center gap-3">
    <i class="bi bi-check-circle shrink-0"></i>
    <p class="min-w-0 flex-1 leading-snug">Item added to cart</p>
  </div>
  <button class="shrink-0 font-semibold">Undo</button>
</div>
```

```jsx
import { CheckCircle2 } from 'lucide-react';
import { Snackbar } from '../components/ui';

// Mount once near the root of your app:
<Snackbar.Host />

// Then call it from anywhere:
Snackbar.show({
  message: 'Item added to cart',
  icon: <CheckCircle2 size={18} />,
  actionLabel: 'Undo',
  onAction: () => restoreItem(),
});
```

## show(options)

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| message | string | | The status text. |
| position | `'top' \| 'bottom'` | `'bottom'` | Which edge the toast slides in from. |
| status | `'loading' \| 'success'` | | Shows a spinner or check icon; the action is hidden while loading. |
| icon | ReactNode | | Custom leading icon, used when no `status` is set. |
| actionLabel | string | | Optional trailing action button label. |
| onAction | `() => void` | | Called when the action is tapped. |

## Methods

| Method | Type | Default | Description |
|--------|------|---------|-------------|
| Snackbar.show | `(options) => Promise` | | Show the toast; resolves when it dismisses. |
| Snackbar.dismiss | `() => void` | | Dismiss the current toast. |
| Snackbar.Host | Component | | Mount once near the app root to enable Snackbar. |
