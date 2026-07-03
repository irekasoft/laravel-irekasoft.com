---
id: stepper
name: Stepper
order: 13
summary: Numeric increment / decrement control.
lead: A quantity stepper. When the value reaches the minimum and an onRemove handler is set, the minus button becomes a delete action.
---

```html
<div class="flex items-center justify-center gap-2">
  <button class="flex h-7 w-7 items-center justify-center rounded-full bg-neutral-900"><i class="bi bi-dash text-sm text-white"></i></button>
  <span class="w-4 text-center text-sm font-semibold text-neutral-900">2</span>
  <button class="flex h-7 w-7 items-center justify-center rounded-full bg-neutral-900"><i class="bi bi-plus text-sm text-white"></i></button>
</div>
```

```jsx
const [qty, setQty] = useState(1);

<Stepper
  value={qty}
  onChange={setQty}
  onRemove={() => setQty(0)}
  min={1}
  max={9}
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| value | number | | Current value (controlled). |
| onChange | `(value) => void` | | Called with the next value. |
| onRemove | `() => void` | | When set, the decrement becomes a delete action at the minimum. |
| min | number | `0` | Minimum value. |
| max | number | | Maximum value. |
| className | string | `''` | Extra classes. |
