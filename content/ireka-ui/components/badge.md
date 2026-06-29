---
id: badge
name: Badge
order: 1
summary: Compact status and category labels.
lead: Small inline label for status, categories or counts. Five color variants and an optional leading icon.
---

```html
<div class="flex flex-wrap justify-center gap-2">
  <span class="inline-flex items-center gap-1 rounded-full bg-neutral-100 px-2.5 py-0.5 text-xs font-medium text-neutral-700">Default</span>
  <span class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-700">Info</span>
  <span class="inline-flex items-center gap-1 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700"><i class="bi bi-check-circle-fill text-[10px]"></i>Success</span>
  <span class="inline-flex items-center gap-1 rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-700"><i class="bi bi-exclamation-triangle-fill text-[10px]"></i>Warning</span>
  <span class="inline-flex items-center gap-1 rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-700"><i class="bi bi-x-circle-fill text-[10px]"></i>Error</span>
  <span class="inline-flex items-center gap-1 rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-700"><i class="bi bi-star-fill text-[10px]"></i>Featured</span>
</div>
```

```jsx
<Badge label="Default" />
<Badge label="Info" variant="blue" />
<Badge label="Success" variant="green" icon={CheckCircle} />
<Badge label="Warning" variant="yellow" icon={AlertTriangle} />
<Badge label="Error" variant="red" icon={XCircle} />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| label | string | | Text shown inside the badge. |
| variant | `'default' \| 'blue' \| 'green' \| 'red' \| 'yellow'` | `'default'` | Color scheme. |
| icon | LucideIcon | | Optional icon component rendered before the label. |
