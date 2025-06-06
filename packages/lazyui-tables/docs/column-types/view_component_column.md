---
title: View Component Columns
weight: 16
---

View Component columns let you specify a component name and attributes and provide attributes to the View Component.  This will render the View Component in it's entirety.

```php

ViewComponentColumn::make('E-mail', 'email')
    ->component('email')
    ->attributes(fn ($value, $row, Column $column) => [
        'id' => $row->id,
        'email' => $value,
    ]),
```

### customComponent

Should you wish to render the Custom Component in it's entirety, then you may use the customComponent method.  Otherwise it will pass in the values directly to the blade, rather than executing your View Component.

```php
ViewComponentColumn::make('Weight', 'grams')
    ->customComponent(\App\View\Components\TestWeight::class)
    ->attributes(fn ($value, $row, Column $column) => [
        'weight' => new Weight($value),
    ]),
```

Please also see the following for other available methods:

- [Available Methods](/tables/columns/available-methods)
- [Column Selection](/tables/columns/column-selection)
- [Secondary Header](/tables/columns/secondary-header)
- [Footer](/tables/columns/footer)
