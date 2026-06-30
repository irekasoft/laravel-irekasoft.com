---
id: grid
title: Grid
order: 1
summary: A 12-column track for arranging widgets.
---

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
