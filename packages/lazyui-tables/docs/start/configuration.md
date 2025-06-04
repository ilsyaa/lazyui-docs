---
title: Configuration
weight: 5
---

## Tailwind Purge

If you find that Tailwind's CSS purge is removing styles that are needed, you have to tell Tailwind to look for the table styles so it knows not to purge them.

```js
// V2 tailwind.config.js
module.exports = {
    mode: 'jit',
    purge: [
        ...
        './vendor/ilsyaa/lazyui-tables/resources/views/**/*.blade.php',
    ],
    ...
};

// V3 tailwind.config.js
module.exports = {
    content: [
        ...
        './vendor/ilsyaa/lazyui-tables/resources/views/**/*.blade.php',
    ],
    ...
};

// V4 app.css
@source './vendor/ilsyaa/lazyui-tables/resources/views/**/*.blade.php';
```

## Bypassing Laravel's Auth Service

By default, all [events](../datatable/events#dispatched) will retrieve any currently authenticated user from Laravel's [Auth service](https://laravel.com/docs/authentication) and pass it along with the event.

If your project doesn't include the Illuminate/Auth package, or you otherwise want to prevent this, you can set the `enableUserForEvent` config option to false.

```php
// config/livewire-tables.php
return [
    // ...
    'events' => [
        /**
        * Enable or disable passing the user from Laravel's Auth service to events
        */
        'enableUserForEvent' => false,
    ],
];
```
