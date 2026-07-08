---
id: page
title: Page
order: 3
summary: The standard screen wrapper — NavBar, scrolling, and lifecycle hooks.
---

`Page` is the standard screen wrapper. It renders a `NavBar`, wraps the
body in a scrollable `ContentContainer`, and exposes lifecycle hooks.
Inside a tab stack the navigator passes `title`, `canGoBack`, and
`onBack` automatically, so most screens just spread them through.

```jsx
import { Page } from '../framework';
import { Card } from '../components/ui';

export default function OrdersPage({ title, canGoBack, onBack }) {
  return (
    <Page
      title={title}
      canGoBack={canGoBack}
      onBack={onBack}
      onFocus={() => console.log('screen focused')}
      onBlur={() => console.log('a child screen was pushed')}
    >
      <Card>
        <Card.Body>Page content lives here.</Card.Body>
      </Card>
    </Page>
  );
}
```

`Page` accepts `scroll` (wrap in `ContentContainer`, default `true`),
`hideNavBar`, `right` (a NavBar action slot), `background`, and the
`onMount` / `onUnmount` / `onFocus` / `onBlur` lifecycle callbacks.
`onFocus` fires on mount and each time a child screen is popped;
`onBlur` fires each time a screen is pushed on top.

Because `Page` ships with `noPaddings`, its direct children sit edge to
edge — you add structure with three composition helpers: `Page.Section`,
`Page.Content`, and `Page.Footer`.

**`Page.Section`** is a padded block for the default scrolling page. Reach
for it when you're building an ordinary top-to-bottom screen: stack
several sections and each gets consistent horizontal padding. Pass a
`background` for a full-bleed colour band, or `contained` to cap the
inner content at a readable width (`max-w-lg`).

```jsx
<Page title="Profile" canGoBack onBack={onBack}>
  <Page.Section>
    <SectionLabel>Account</SectionLabel>
    <GroupedList>{/* … */}</GroupedList>
  </Page.Section>

  <Page.Section background="#f5f5f5" contained>
    <p>A full-bleed band with centered, width-constrained content.</p>
  </Page.Section>
</Page>
```

**`Page.Content`** and **`Page.Footer`** go together when a screen needs a
pinned action bar rather than a plain scroll — a checkout, an editor, any
flow with a primary button that must stay in reach. Set `scroll={false}`
on the `Page` to turn it into a flex column: `Page.Content` becomes the
scrollable middle (`flex-1`), and `Page.Footer` with `pin` sticks to the
bottom of that column.

```jsx
<Page title="Checkout" canGoBack onBack={onBack} scroll={false}>
  <Page.Content>
    <SectionLabel>Items</SectionLabel>
    {/* scrollable body */}
  </Page.Content>

  <Page.Footer pin>
    <Button variant="primary">Place order</Button>
  </Page.Footer>
</Page>
```

In a normal scrolling page you can also drop in a `Page.Footer` **without**
`pin` — it renders `sticky bottom-0`, hovering at the bottom of the
viewport while the content scrolls behind it. Use `pin` for fixed
flex-column layouts (with `Page.Content`), and the default sticky mode
for scrolling pages.
