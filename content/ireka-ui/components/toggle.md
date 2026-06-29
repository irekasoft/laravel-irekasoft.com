---
id: toggle
name: Toggle
order: 12
summary: On/off switch, optionally with a label.
lead: On/off switch. Renders standalone, or as a labeled row when given a label.
---

```html
<div class="w-full space-y-3">
  <div class="flex justify-center">
    <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#171717;">
      <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow" style="transform:translateX(20px);"></span>
    </span>
  </div>
  <div class="space-y-3 rounded-xl border border-neutral-200 px-4 py-3">
    <div class="flex items-center justify-between">
      <span class="text-sm text-neutral-700">Notifications</span>
      <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#171717;">
        <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow" style="transform:translateX(20px);"></span>
      </span>
    </div>
    <div class="flex items-center justify-between">
      <span class="text-sm text-neutral-700">Dark mode</span>
      <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#e5e5e5;">
        <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow"></span>
      </span>
    </div>
  </div>
</div>
```

```jsx
<Toggle defaultChecked />
<Toggle label="Notifications" defaultChecked />
<Toggle label="Dark mode" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| label | string | | Optional label; when present the switch is laid out as a row. |
| defaultChecked | boolean | `false` | Initial on/off state. |
