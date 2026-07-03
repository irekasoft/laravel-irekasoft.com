---
id: floating-nav-bar
name: FloatingNavBar
order: 7
summary: Floating top bar with back button and fade-in title.
lead: A transparent navigation bar that floats over scrolling content — the back button always shows, while the title and background fade in on scroll.
---

```html
<div class="w-full rounded-xl border border-neutral-200 bg-neutral-50 p-3">
  <div class="relative flex min-h-10 items-center justify-between">
    <button class="flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-sm"><i class="bi bi-chevron-left text-neutral-900"></i></button>
    <p class="absolute left-1/2 -translate-x-1/2 text-sm font-semibold text-neutral-900">Details</p>
    <button class="flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-sm"><i class="bi bi-three-dots text-neutral-900"></i></button>
  </div>
</div>
```

```jsx
import { MoreHorizontal } from 'lucide-react';

<FloatingNavBar
  title="Details"
  onBack={() => navigate(-1)}
  showTitle={scrolled}
  showNavBg={scrolled}
  right={
    <ButtonCircle aria-label="More">
      <MoreHorizontal size={18} />
    </ButtonCircle>
  }
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| title | string | | Centered title text. |
| onBack | `() => void` | | Back button handler. |
| showTitle | boolean | `false` | Fade the title in (e.g. once the page is scrolled). |
| showNavBg | boolean | `false` | Fade in the blurred background and bottom border. |
| right | ReactNode | | Content for the trailing slot. |
| titleClassName | string | `'text-sm'` | Extra classes for the title. |
