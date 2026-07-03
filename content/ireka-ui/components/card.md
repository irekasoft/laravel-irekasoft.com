---
id: card
name: Card
order: 5
summary: Grouped surface with header, body and footer slots.
lead: A rounded surface composed from Card.Header, Card.Body and Card.Footer. Pass onClick to make the whole card tappable.
---

```html
<div class="space-y-3">
  <div class="w-full overflow-hidden rounded-2xl border border-neutral-200 bg-white text-left">
    <div class="flex items-center gap-3 px-4 pt-3 pb-2">
      <p class="flex-1 truncate text-sm font-semibold text-neutral-900">Order #1024</p>
      <span class="inline-flex items-center gap-1 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700">Paid</span>
    </div>
    <div class="px-4 py-3 text-sm text-neutral-600">Two items · RM 38.00</div>
    <div class="flex items-center gap-2 border-t border-neutral-100 px-4 py-3">
      <span class="inline-flex items-center gap-1 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700">Delivered</span>
      <span class="ml-auto text-xs text-neutral-400">Jun 23</span>
    </div>
  </div>
  <div class="w-full overflow-hidden rounded-2xl bg-neutral-900 text-left">
    <div class="flex items-center gap-3 px-4 pt-3 pb-2">
      <p class="flex-1 truncate text-sm font-semibold text-white">Dark card</p>
    </div>
    <div class="px-4 py-3 text-sm text-neutral-300">Inverted surface variant.</div>
  </div>
</div>
```

```jsx
<Card>
  <Card.Header
    title="Order #1024"
    trailing={<Badge label="Paid" variant="green" />}
  />
  <Card.Body>Two items · RM 38.00</Card.Body>
  <Card.Footer>
    <Badge label="Delivered" variant="green" />
    <span className="text-xs text-neutral-400 ml-auto">Jun 23</span>
  </Card.Footer>
</Card>

<Card variant="dark">
  <Card.Header title="Dark card" />
  <Card.Body>Inverted surface variant.</Card.Body>
</Card>
```

## Card props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| variant | `'default' \| 'dark' \| 'ghost'` | `'default'` | Surface style. |
| onClick | `() => void` | | When set, the card renders as a button. |
| className | string | `''` | Extra classes. |
| children | ReactNode | | Header / Body / Footer slots. |

## Card.Header props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| title | string | | Header title text. |
| image | string | | Optional full-width image URL above the title. |
| leading | ReactNode | | Content before the title (e.g. an avatar). |
| trailing | ReactNode | | Content after the title (e.g. a badge or chevron). |
