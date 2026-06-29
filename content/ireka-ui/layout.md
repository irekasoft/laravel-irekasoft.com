---
title: Layout
description: Arranging content in ireka-ui — the 12-column Grid and iOS-style GroupedList.
eyebrow: Components
---

Two primitives cover most screen layouts: `Grid` lays widgets out across
a 12-column track, and `GroupedList` builds the inset, rounded lists that
settings and detail screens are made of.

## Grid

`Grid` is a 12-column grid. Wrap children in `Grid.Item` and give each a
`col` span from 1 to 12; rows wrap automatically once the spans fill up.
The `gap` prop (default `2`) sets the spacing between cells.

```jsx
import { Grid } from '../components/ui';

function Stats() {
  return (
    <Grid gap={2}>
      <Grid.Item col={4}>
        <StatCard label="Orders" value="128" />
      </Grid.Item>
      <Grid.Item col={4}>
        <StatCard label="Points" value="2,340" />
      </Grid.Item>
      <Grid.Item col={4}>
        <StatCard label="Tier" value="Gold" />
      </Grid.Item>
    </Grid>
  );
}
```

Mix spans freely — a `col={12}` item fills the row, two `col={6}` items
split it in half, four `col={3}` items make a quarter-width row.

## GroupedList

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
