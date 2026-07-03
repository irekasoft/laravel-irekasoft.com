---
id: content-container
name: ContentContainer
order: 6
summary: Scrollable, centered page body.
lead: Scrollable page body. Fills the remaining height, scrolls vertically, and centers content to a comfortable reading width unless told otherwise.
---

```html
<div class="flex h-40 flex-col overflow-hidden rounded-xl border border-neutral-200 bg-white">
  <div class="flex-1 overflow-y-auto p-4">
    <div class="mx-auto max-w-lg">
      <p class="mb-2 text-xs font-semibold uppercase tracking-wider text-neutral-400">Profile</p>
      <p class="text-sm text-neutral-600">
        Content scrolls inside this region while the surrounding chrome stays put. Centered to
        <code class="font-mono text-[12px]">max-w-lg</code> by default.
      </p>
    </div>
  </div>
</div>
```

```jsx
<ContentContainer>
  <SectionLabel>Profile</SectionLabel>
  <p>Page content goes here…</p>
</ContentContainer>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| children | ReactNode | | Page content. |
| full | boolean | `false` | Use full width instead of the centered max-width column. |
| noMargins | boolean | `false` | Remove the default padding. |
