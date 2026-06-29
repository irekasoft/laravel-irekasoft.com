---
title: Structure
description: How ireka-ui apps are organised — the main.jsx entry, the framework layer, tab navigation, and route guards.
---

ireka-ui apps follow a layered layout: **main.jsx** mounts the app
inside a stack of providers, the **framework/** layer supplies the
`AppShell`, `TabNav`, and navigation primitives, and **App.jsx**
declares the routes and tabs that render page components from
**pages/**.

```text
src/
├── main.jsx            # Entry — mounts providers + AppShell
├── App.jsx             # Routes, auth guards, TabNav
├── framework/          # AppShell, TabNav, Tab, navigation, auth
├── i18n/               # LanguageProvider + useLanguage
├── pages/              # One component per screen
│   ├── HomePage.jsx
│   ├── MenuPage.jsx
│   └── auth/
│       ├── LoginPage.jsx
│       └── RegisterPage.jsx
└── components/
    └── ui/             # ireka-ui components
```

**main.jsx** is the entry point. It mounts the app on `#root` and
wraps it in the provider stack — language, toasts, then the
`AppShell` (configured for mobile) that every screen renders inside.

```jsx
import { StrictMode } from 'react';
import { createRoot } from 'react-dom/client';
import { AppShell } from './framework';
import { LanguageProvider } from './i18n/LanguageContext';
import { ToastProvider } from './components/ui/Toast';
import './index.css';
import App from './App.jsx';

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <LanguageProvider>
      <ToastProvider>
        <AppShell isMobile disableTextSelection>
          <App />
        </AppShell>
      </ToastProvider>
    </LanguageProvider>
  </StrictMode>,
);
```

**App.jsx** holds the route table. Guest-only routes (`/login`,
`/register`) and the authenticated app are split by guard components
that read auth state via `useAuth`. The catch-all route renders the
main tabbed experience.

```jsx
import { Routes, Route, Navigate } from 'react-router-dom';
import { useAuth } from './framework';
import LoginPage from './pages/auth/LoginPage';
import RegisterPage from './pages/auth/RegisterPage';

function AuthGuard({ children }) {
  const { isAuthenticated } = useAuth();
  return isAuthenticated ? children : <Navigate to="/login" replace />;
}

function GuestGuard({ children }) {
  const { isAuthenticated } = useAuth();
  return isAuthenticated ? <Navigate to="/" replace /> : children;
}

export default function App() {
  return (
    <Routes>
      <Route path="/login"    element={<GuestGuard><LoginPage /></GuestGuard>} />
      <Route path="/register" element={<GuestGuard><RegisterPage /></GuestGuard>} />
      <Route path="/*"        element={<AuthGuard><MainApp /></AuthGuard>} />
    </Routes>
  );
}
```

The authenticated app is a `TabNav` with one `Tab` per section. Each
tab declares an `id`, a `label`, a `lucide` `icon`, and the page
`component` it renders — optionally a `badge`. Labels run through
`useLanguage` for translation.

```jsx
import { Home, Search, User, Layers, UtensilsCrossed, ClipboardList } from 'lucide-react';
import { TabNav, Tab } from './framework';
import { useLanguage } from './i18n/LanguageContext';

function MainApp() {
  const { t } = useLanguage();
  return (
    <TabNav>
      <Tab id="home"    label={t('home')}   icon={Home}            component={HomePage} />
      <Tab id="menu"    label={t('menu')}   icon={UtensilsCrossed} component={MenuPage} />
      <Tab id="search"  label={t('Search')} icon={Search}          component={SearchPage} />
      <Tab id="orders"  label={t('orders')} icon={ClipboardList}   component={MyOrdersPage} badge={1} />
      <Tab id="rewards" label={t('rewards')} icon={Layers}         component={RewardsPage} />
      <Tab id="profile" label={t('profile')} icon={User}           component={ProfilePage} />
    </TabNav>
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
