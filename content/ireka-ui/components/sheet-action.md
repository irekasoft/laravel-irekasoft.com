---
id: sheet-action
name: SheetAction
order: 7
summary: Full-width row action for sheets and menus.
lead: Full-width tappable row for action sheets and dropdown menus. Set danger for destructive actions.
---

```html
<div class="w-full rounded-xl border border-neutral-200 bg-white p-1.5">
  <button class="w-full rounded-xl px-3 py-2.5 text-left text-sm text-neutral-800 hover:bg-neutral-50">Edit</button>
  <button class="w-full rounded-xl px-3 py-2.5 text-left text-sm text-neutral-800 hover:bg-neutral-50">Share</button>
  <button class="w-full rounded-xl px-3 py-2.5 text-left text-sm text-red-600 hover:bg-neutral-50">Delete</button>
</div>
```

```jsx
<SheetAction label="Edit" onClick={…} />
<SheetAction label="Share" onClick={…} />
<SheetAction label="Delete" danger onClick={…} />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| label | string | | Row text. |
| danger | boolean | `false` | Render in destructive (red) style. |
| onClick | `() => void` | | Tap handler. |
