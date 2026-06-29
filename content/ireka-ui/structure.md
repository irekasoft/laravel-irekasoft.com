---
title: Structure
description: How ireka-ui apps are organised — AppShell, pages, and react-router-dom routing.
---

ireka-ui apps follow a simple layout: an **AppShell** wraps every
screen, each route renders a page component from **pages/**, and
**react-router-dom** handles navigation between them.

```text
src/
├── App.jsx              # BrowserRouter + route table
├── AppShell.jsx         # Shared layout wrapper
├── pages/
│   ├── HomePage.jsx
│   ├── OrdersPage.jsx
│   └── SettingsPage.jsx
└── components/
    └── ui/              # ireka-ui components
```

**App.jsx** defines the route table.
Nested routes share **AppShell**, which renders an
`<Outlet />` where the active page appears.

```jsx
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import AppShell from './AppShell';
import HomePage from './pages/HomePage';
import OrdersPage from './pages/OrdersPage';
import SettingsPage from './pages/SettingsPage';

export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route element={<AppShell />}>
          <Route index element={<HomePage />} />
          <Route path="orders" element={<OrdersPage />} />
          <Route path="settings" element={<SettingsPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}
```

```jsx
import { Outlet } from 'react-router-dom';
import { ContentContainer } from './components/ui';

export default function AppShell() {
  return (
    <ContentContainer>
      <Outlet />
    </ContentContainer>
  );
}
```

Pages are plain React components — one file per screen, importing ireka-ui primitives as needed.

```jsx
import { Card, SectionLabel } from '../components/ui';

export default function OrdersPage() {
  return (
    <>
      <SectionLabel>Orders</SectionLabel>
      <Card>
        <Card.Body>Page content lives here.</Card.Body>
      </Card>
    </>
  );
}
```
