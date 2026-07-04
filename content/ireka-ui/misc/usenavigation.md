---
id: usenavigation
title: useNavigation
order: 2
summary: Drive the current tab stack with push and pop.
---

Inside a tab, call `useNavigation()` to drive the current stack.
`push(title, data, opts)` slides a new screen in; `pop()` slides the
top one back out. `canGoBack` reflects the stack depth.

```jsx
import { useNavigation } from '../framework';

function OrderRow({ order }) {
  const { push } = useNavigation();
  return (
    <button onClick={() => push(`Order ${order.id}`, order)}>
      Order {order.id}
    </button>
  );
}
```

Pushed screens render the same tab `component`, receiving the pushed
`title` and `data` via `useRoute()`. Pass `{ noAnimation: true }` as the
third argument to skip the slide — useful when replacing the stack after
an action like a completed checkout.
