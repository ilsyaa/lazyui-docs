---
title: Link Columns
weight: 13
---

Link columns provide a way to display HTML links in your table without having to use `format()` or partial views:

```php
LinkColumn::make('Action')
    ->title(fn($row) => 'Edit')
    ->location(fn($row) => route('admin.users.edit', $row)),
```

You may also pass an array of attributes to apply to the `a` tag:

```php
LinkColumn::make('Action')
    ->title(fn($row) => 'Edit')
    ->location(fn($row) => route('admin.users.edit', $row))
    ->attributes(fn($row) => [
        'class' => 'rounded-full',
        'alt' => $row->name . ' Avatar',
    ]),
```

Please also see the following for other available methods:

- [Available Methods](/tables/columns/available-methods)
- [Column Selection](/tables/columns/column-selection)
- [Secondary Header](/tables/columns/secondary-header)
- [Footer](/tables/columns/footer)
