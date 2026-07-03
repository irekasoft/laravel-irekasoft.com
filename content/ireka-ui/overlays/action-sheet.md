---
id: action-sheet
title: ActionSheet
order: 2
summary: A bottom sheet of tappable actions — or a centered menu on wider screens.
---

`ActionSheet` slides up a grouped list of action buttons over a dimmed
backdrop, with a cancel button beneath. It's drag-dismissible, and
tapping any action fires its `onPress` and then closes the sheet. Pass a
flat `actions` array for a single group, or `sections` to split the
actions into separate groups.

```jsx
import { useState } from 'react';
import { ActionSheet } from '../framework';

function PostOptions() {
  const [open, setOpen] = useState(false);
  return (
    <>
      <button onClick={() => setOpen(true)}>Options</button>

      <ActionSheet
        open={open}
        onClose={() => setOpen(false)}
        title="Post options"
        sections={[
          { actions: [
            { label: 'Share link', onPress: () => share() },
            { label: 'Copy link', onPress: () => copy() },
          ] },
          { actions: [{ label: 'Delete', danger: true, onPress: () => remove() }] },
        ]}
      />
    </>
  );
}
```

For a single group, skip `sections` and pass `actions` directly:

```jsx
<ActionSheet
  open={open}
  onClose={() => setOpen(false)}
  actions={[
    { label: 'Take photo' },
    { label: 'Choose from library' },
  ]}
/>
```

Mark an action with `danger: true` to tint it red. The cancel button
reads **Cancel** by default — pass `cancelLabel` to change it, or
`cancelLabel={false}` to hide it. Set `adaptable` and the sheet becomes
a compact centered menu on `md`+ viewports instead of a bottom sheet.
