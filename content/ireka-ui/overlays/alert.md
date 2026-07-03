---
id: alert
title: Alert
order: 4
summary: An imperative, iOS-style confirmation dialog you call from anywhere.
---

`Alert` is the centered, iOS-style confirmation dialog over a dimmed
backdrop. It's an **imperative** API — mount one host, then call
`Alert.show()` from anywhere and await the result. There's no local
state or JSX to wire into your component tree.

Mount the host once, near the root of your app:

```jsx
import { Alert } from '../components/ui';

<Alert.Host />
```

Then call `Alert.show()` wherever you need a confirmation. It returns a
promise that resolves to the index of the button the user pressed — or
`null` if the alert was dismissed by tapping the backdrop or the
hardware back button:

```jsx
async function confirmDelete() {
  const choice = await Alert.show({
    title: 'Delete order?',
    message: "This can't be undone.",
    buttons: [
      { label: 'Cancel', variant: 'cancel' },
      { label: 'Delete', variant: 'destructive', onPress: () => removeOrder() },
    ],
  });

  // choice === 1 when "Delete" was tapped, null when dismissed
}
```

Each button can carry its own `onPress` callback and a `variant`:
`destructive` (red) or `cancel` (muted); omit it for the default dark
tint. One or two buttons sit side by side; three or more stack
vertically. Call `Alert.show()` with no `buttons` and a single **OK**
button is shown.
