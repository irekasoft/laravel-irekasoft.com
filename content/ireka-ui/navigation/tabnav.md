---
id: tabnav
title: TabNav
order: 2
summary: The root tab navigator — one Tab per section, each with its own screen stack.
---

`TabNav` is the app's root navigator. Declare one `<Tab>` per section and
`TabNav` renders the bottom tab bar and manages each tab's own navigation
stack — pushing a screen slides it in, and the back gesture (or the
Android hardware back) pops it. Switching tabs preserves where the user
was in each one. `<Tab>` never renders on its own; `TabNav` reads its
props declaratively, much like React Navigation's `Tab.Screen`.

```jsx
import { Home, UtensilsCrossed, ClipboardList, User } from 'lucide-react';
import { TabNav, Tab } from '../framework';

function MainApp() {
  return (
    <TabNav>
      <Tab id="home"    label="Home"    icon={Home}            component={HomePage} />
      <Tab id="menu"    label="Menu"    icon={UtensilsCrossed} component={MenuPage} />
      <Tab id="orders"  label="Orders"  icon={ClipboardList}   component={MyOrdersPage} badge={1} />
      <Tab id="profile" label="Profile" icon={User}            component={ProfilePage} />
    </TabNav>
  );
}
```

Each `Tab` takes an `id`, a `label`, a lucide `icon`, and the root
`component` for that tab; add a `badge` to show a count on the tab. Pass
`isHideLabel` to `TabNav` for an icon-only bar.

For deep-linkable pushed screens, map them per tab with `routes` (keyed by
push title) or a `routeResolver`, and translate incoming URLs with
`resolveScreenFromUrl`.
