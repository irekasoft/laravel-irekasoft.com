---
id: section-label
name: SectionLabel
order: 8
summary: Uppercase heading for a group of controls.
lead: Uppercase caption used to title a group of controls.
---

```html
<div class="w-full">
  <p class="mb-2 text-xs font-semibold uppercase tracking-wider text-neutral-400">Notifications</p>
  <div class="rounded-xl border border-neutral-200 px-4 py-3 text-sm text-neutral-600">
    Grouped content sits below the label.
  </div>
</div>
```

```jsx
<SectionLabel>Notifications</SectionLabel>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| children | ReactNode | | Label text. |
