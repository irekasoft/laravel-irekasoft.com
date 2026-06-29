---
id: text-area
name: TextArea
order: 11
summary: Labeled multi-line text field.
lead: Labeled multi-line field. Same pass-through behaviour as TextInput, plus a rows prop.
---

```html
<div class="w-full">
  <div class="flex flex-col gap-1.5">
    <label class="text-xs font-medium text-neutral-500">Notes</label>
    <textarea rows="4" placeholder="Add delivery instructions…" class="w-full resize-none rounded-xl border border-neutral-200 bg-white px-3 py-2.5 text-base focus:border-transparent focus:outline-none focus:ring-2 focus:ring-neutral-900"></textarea>
  </div>
</div>
```

```jsx
<TextArea label="Notes" rows={4}
  placeholder="Add delivery instructions…" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| label | string | | Optional field label. |
| rows | number | `3` | Visible text rows. |
| className | string | `''` | Extra classes on the textarea. |
| ...props | TextareaHTMLAttributes | | Forwarded to the underlying textarea. |
