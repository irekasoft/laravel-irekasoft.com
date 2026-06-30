---
id: dropdownmenu
title: DropdownMenu
order: 2
summary: A small menu anchored to the top-right over a light scrim.
---

`DropdownMenu` anchors a small menu to the top-right of the screen over a
light scrim — the overlay for a NavBar "more" button. Control it with
`open` and `onClose`, and fill it with `DropdownMenu.Item` rows. Tapping
the scrim, choosing an item, or pressing back dismisses it.

```jsx
import { useState } from 'react';
import { MoreVertical } from 'lucide-react';
import DropdownMenu from '../components/ui/DropdownMenu';

function ProfileMenu() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)} aria-label="More">
        <MoreVertical size={20} />
      </button>

      <DropdownMenu open={open} onClose={() => setOpen(false)}>
        <DropdownMenu.Item label="Edit"   onClick={() => setOpen(false)} />
        <DropdownMenu.Item label="Share"  onClick={() => setOpen(false)} />
        <DropdownMenu.Item label="Delete" danger onClick={() => setOpen(false)} />
      </DropdownMenu>
    </>
  );
}
```

Each `DropdownMenu.Item` takes a `label`, an `onClick`, and an optional
`danger` flag that tints destructive actions red. Like every overlay it
registers with the shared back stack and locks interaction underneath
while open.
