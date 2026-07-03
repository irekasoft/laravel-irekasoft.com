---
id: button-circle
name: ButtonCircle
order: 3
summary: Circular icon button in three sizes.
lead: Round icon button. Pass an icon as children and an aria-label for accessibility.
---

```html
<div class="flex items-center justify-center gap-3">
  <button aria-label="Add" class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-neutral-900 text-white"><i class="bi bi-plus-lg text-xs"></i></button>
  <button aria-label="Add" class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-neutral-900 text-white"><i class="bi bi-plus-lg text-sm"></i></button>
  <button aria-label="Add" class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-neutral-900 text-white"><i class="bi bi-plus-lg"></i></button>
</div>
```

```jsx
import { Plus } from 'lucide-react';

<ButtonCircle aria-label="Add" onClick={() => {}}>
  <Plus size={18} />
</ButtonCircle>

<ButtonCircle aria-label="Add" size="sm">
  <Plus size={14} />
</ButtonCircle>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| children | ReactNode | | Icon element rendered inside the button. |
| aria-label | string | | Accessible label for the icon-only button. |
| size | `'sm' \| 'md' \| 'lg'` | `'lg'` | Button diameter (32 / 36 / 40px). |
| onClick | `() => void` | | Tap handler. |
| disabled | boolean | `false` | Disable interaction (dims to 40%). |
| className | string | `''` | Extra classes, merged onto the button. |
