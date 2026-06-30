---
id: page
title: Page
order: 1
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
