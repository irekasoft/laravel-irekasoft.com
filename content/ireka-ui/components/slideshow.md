---
id: slideshow
name: Slideshow
order: 9
summary: Swipeable, paginated image carousel.
lead: Swipeable, paginated image carousel with drag, snap, dots and optional auto-advance.
---

```html
<div class="w-full">
  <div class="relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-neutral-200">
    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&q=80" alt="" class="h-full w-full object-cover" />
    <div class="absolute inset-x-0 bottom-0 rounded-b-2xl bg-black/40 px-4 py-3 backdrop-blur-sm">
      <p class="text-sm font-semibold text-white">Fresh deals</p>
      <p class="mt-0.5 text-xs text-white/70">Up to 40% off</p>
    </div>
  </div>
  <div class="mt-2.5 flex justify-center gap-1.5">
    <span class="h-2 w-5 rounded-full bg-emerald-500"></span>
    <span class="h-2 w-2 rounded-full bg-neutral-300"></span>
    <span class="h-2 w-2 rounded-full bg-neutral-300"></span>
  </div>
</div>
```

```jsx
<Slideshow
  autoLoop
  slides={[
    { image: '/a.jpg', title: 'Fresh deals', subtitle: 'Up to 40% off' },
    { image: '/b.jpg', title: 'New arrivals' },
    { image: '/c.jpg', title: 'Local favourites' },
  ]}
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| slides | `{ image, title?, subtitle?, onPress? }[]` | `[]` | Slides to render. A tap (no drag) fires onPress. |
| autoLoop | boolean | `false` | Auto-advance and wrap around. |
| height | `number \| string` | | Fixed slide height. Defaults to a 4:3 aspect ratio. |
| highlightColor | string | | Active pagination dot color. |
| paddingX | number | `16` | Horizontal inset around the active slide. |
