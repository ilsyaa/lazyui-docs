---
title: Recommended
weight: 2
---

While the package is very customisable, and supports a number of different approaches.  The below is the recommended approach, that gives the best performance for the tables:

## Installation
```
composer require ilsyaa/lazyui-tables
```

## Push Assets
You need to push the assets to the head in every view that uses the tables.
```html
@push('head')
    @LazyUITableStyles
    @LazyUITableThirdPartyStyles
    @LazyUITableScripts
    @LazyUITableThirdPartyScripts
@endpush
```

## Usage
```
php artisan make:datatables UsersTable User
```

## Render View
```html
<livewire:users-table />
```
