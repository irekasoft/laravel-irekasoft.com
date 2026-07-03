---
id: switch
name: Switch
order: 14
summary: On/off switch, controlled or uncontrolled.
lead: A toggle switch. Use it uncontrolled with defaultChecked, or controlled with checked + onChange. Track and knob colors are customizable.
---

```html
<div class="flex items-center justify-center gap-4">
  <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#171717;">
    <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow" style="transform:translateX(20px);"></span>
  </span>
  <span class="relative inline-block h-6 w-11 shrink-0 rounded-full" style="background-color:#e5e5e5;">
    <span class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow"></span>
  </span>
</div>
```

```jsx
const [on, setOn] = useState(true);

<Switch checked={on} onChange={setOn} />
<Switch defaultChecked />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| checked | boolean | | Controlled state. Omit for uncontrolled use. |
| defaultChecked | boolean | `false` | Initial state when uncontrolled. |
| onChange | `(checked) => void` | | Called with the new state on toggle. |
| onColor | string | `'#171717'` | Track color when on. |
| offColor | string | `'#e5e5e5'` | Track color when off. |
| knobOn | string | `'#ffffff'` | Knob color when on. |
| knobOff | string | `'#ffffff'` | Knob color when off. |
| className | string | `''` | Extra classes, merged onto the button. |
