---
id: groupedlist
title: GroupedList
order: 2
summary: Inset, rounded lists for settings and detail screens.
---

`GroupedList` builds inset, rounded lists — the staple of settings and
profile screens. Compose `GroupedList.Section` (an optional `title` and
`footer`) with `GroupedList.Item` rows; dividers are drawn automatically
between items.

```jsx
import { User, Bell, Lock, ChevronRight } from 'lucide-react';
import { GroupedList } from '../components/ui';

function Settings() {
  return (
    <GroupedList.Section title="Account" footer="Manage how you sign in.">
      <GroupedList.Item label="Profile"  icon={User} onPress={openProfile} />
      <GroupedList.Item label="Alerts"   icon={Bell} value="On" onPress={openAlerts} />
      <GroupedList.Item label="Password" icon={Lock} onPress={openPassword} />
      <GroupedList.Item label="Sign out" danger onPress={signOut} />
    </GroupedList.Section>
  );
}
```

Each `GroupedList.Item` takes a `label`, an optional leading `icon`, a
trailing `value`, and an `onPress` (which adds a chevron and tap
feedback). Set `danger` to tint a destructive row red, or pass a custom
`trailing` node to replace the chevron — a `Toggle`, a badge, anything.
