---
id: skeleton
name: Skeleton
order: 11
summary: Animated placeholder for loading state.
lead: Animated placeholder block for loading states. Size it with utility classes.
---

```html
<div class="w-full space-y-3 rounded-xl border border-neutral-200 bg-white p-4">
  <div class="flex items-center gap-3">
    <div class="h-10 w-10 animate-pulse rounded-full bg-neutral-200"></div>
    <div class="flex-1 space-y-2">
      <div class="h-3 w-3/4 animate-pulse rounded-lg bg-neutral-200"></div>
      <div class="h-3 w-1/2 animate-pulse rounded-lg bg-neutral-200"></div>
    </div>
  </div>
  <div class="h-3 w-full animate-pulse rounded-lg bg-neutral-200"></div>
  <div class="h-24 w-full animate-pulse rounded-lg bg-neutral-200"></div>
</div>
```

```jsx
<div className="flex items-center gap-3">
  <Skeleton className="w-10 h-10" rounded="rounded-full" />
  <div className="flex-1 space-y-2">
    <Skeleton className="h-3 w-3/4" />
    <Skeleton className="h-3 w-1/2" />
  </div>
</div>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| className | string | `''` | Width / height utilities for the block. |
| rounded | string | `'rounded-lg'` | Corner radius utility (e.g. rounded-full). |
