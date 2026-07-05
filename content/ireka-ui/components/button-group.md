---
id: button-group
name: ButtonGroup
order: 4
summary: Pill of mutually-exclusive icon buttons.
lead: A compact toggle of icon options — one active at a time. Compose with ButtonGroup.Button.
---

```html
<div class="flex justify-center">
  <div class="flex rounded-full bg-neutral-100 p-0.5" role="group">
    <button class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-neutral-900 shadow-sm"><i class="bi bi-list-ul"></i></button>
    <button class="flex h-9 w-9 items-center justify-center rounded-full text-neutral-400"><i class="bi bi-grid"></i></button>
  </div>
</div>
```

```jsx
import { List, Grid } from 'lucide-react';

const [view, setView] = useState('list');

<ButtonGroup value={view} onChange={setView}>
  <ButtonGroup.Button value="list" aria-label="List">
    <List size={16} />
  </ButtonGroup.Button>
  <ButtonGroup.Button value="grid" aria-label="Grid">
    <Grid size={16} />
  </ButtonGroup.Button>
</ButtonGroup>
```

## ButtonGroup props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| value | string | | Value of the currently active button. |
| onChange | `(value) => void` | | Called with the selected value on tap. |
| children | ReactNode | | ButtonGroup.Button items. |
| className | string | `''` | Extra classes. |
