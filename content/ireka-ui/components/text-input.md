---
id: text-input
name: TextInput
order: 10
summary: Labeled single-line text field.
lead: Labeled single-line field. Any extra props (type, placeholder, value…) pass straight through to the input.
---

```html
<div class="w-full space-y-3">
  <div class="flex flex-col gap-1.5">
    <label class="text-xs font-medium text-neutral-500">Full name</label>
    <input type="text" placeholder="Jane Doe" class="w-full rounded-xl border border-neutral-200 bg-white px-3 py-2.5 text-base focus:border-transparent focus:outline-none focus:ring-2 focus:ring-neutral-900" />
  </div>
  <div class="flex flex-col gap-1.5">
    <label class="text-xs font-medium text-neutral-500">Password</label>
    <input type="password" placeholder="••••••••" class="w-full rounded-xl border border-neutral-200 bg-white px-3 py-2.5 text-base focus:border-transparent focus:outline-none focus:ring-2 focus:ring-neutral-900" />
  </div>
</div>
```

```jsx
const [name, setName] = useState('');

<TextInput label="Full name" placeholder="Jane Doe"
  value={name} onChange={(e) => setName(e.target.value)} />
<TextInput label="Password" type="password" placeholder="••••••••" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| label | string | | Optional field label. |
| className | string | `''` | Extra classes on the input. |
| ...props | InputHTMLAttributes | | Forwarded to the underlying input (type, value, onChange, placeholder…). |
