---
id: segmented-control
name: SegmentedControl
order: 6
summary: iOS-style single-select switcher.
lead: iOS-style single-select switch. Options can be plain strings or { label, value } objects.
---

```html
<div class="flex gap-1 rounded-xl bg-neutral-100 p-1">
  <button class="flex-1 rounded-lg bg-white py-1.5 text-sm font-medium text-neutral-900 shadow-sm">Day</button>
  <button class="flex-1 rounded-lg py-1.5 text-sm font-medium text-neutral-500">Week</button>
  <button class="flex-1 rounded-lg py-1.5 text-sm font-medium text-neutral-500">Month</button>
</div>
```

```jsx
const [segment, setSegment] = useState('day');

<SegmentedControl
  options={[
    { label: 'Day', value: 'day' },
    { label: 'Week', value: 'week' },
    { label: 'Month', value: 'month' },
  ]}
  value={segment}
  onChange={setSegment}
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| options | `string[] \| { label, value }[]` | `[]` | The selectable segments. |
| value | string | | Currently selected value. |
| onChange | `(value) => void` | | Called with the new value on tap. |
