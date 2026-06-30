---
id: hud
title: HUD
order: 5
summary: A centered heads-up indicator for loading and status.
---

`HUD` is the centered heads-up indicator — a blurred dark tile with an
icon and label. `type` is `done`, `error`, `info`, or `loading`. The
first three auto-dismiss after ~1.8s (firing `onClose`); `loading` spins
until you set `open={false}` yourself.

```jsx
import { useState } from 'react';
import { HUD } from '../components/ui';

function SaveButton() {
  const [saving, setSaving] = useState(false);
  const [done, setDone] = useState(false);

  async function save() {
    setSaving(true);
    await persist();
    setSaving(false);
    setDone(true);
  }

  return (
    <>
      <button onClick={save}>Save</button>
      <HUD open={saving} type="loading" label="Saving…" />
      <HUD open={done} type="done" label="Saved" onClose={() => setDone(false)} />
    </>
  );
}
```
