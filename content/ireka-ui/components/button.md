---
id: button
name: Button
order: 2
summary: Primary tap target with four variants.
lead: Full-width primary action with four variants. Renders a native button element.
---

```html
<div class="space-y-2">
  <button class="w-full rounded-xl bg-neutral-900 py-2.5 text-sm font-medium text-white">Primary</button>
  <button class="w-full rounded-xl bg-neutral-100 py-2.5 text-sm font-medium text-neutral-800">Secondary</button>
  <button class="w-full rounded-xl border border-neutral-300 py-2.5 text-sm font-medium text-neutral-700">Outline</button>
  <button class="w-full rounded-xl bg-red-500 py-2.5 text-sm font-medium text-white">Destructive</button>
</div>
```

```jsx
<Button variant="primary">Primary</Button>
<Button variant="secondary">Secondary</Button>
<Button variant="outline">Outline</Button>
<Button variant="destructive">Destructive</Button>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| children | ReactNode | | Button label / content. |
| variant | `'primary' \| 'secondary' \| 'outline' \| 'destructive'` | `'primary'` | Visual style. |
| onClick | `() => void` | | Tap handler. |
| className | string | `''` | Extra classes, merged onto the button. |
