---
title: Component Columns
weight: 7
---

Component columns let you specify a component name and attributes and provides the column value to the slot.

```php
// Before
Column::make("Email", "email")
    ->format(function ($value) {
        return view('components.alert')
            ->with('attributes', new ComponentAttributeBag([
                'type' => Str::endsWith($value, 'example.org') ? 'success' : 'danger',
                'dismissible' => true,
            ]))
            ->with('slot', $value);
    }),

// After
ComponentColumn::make('E-mail', 'email')
    ->component('email')
    ->attributes(fn ($value, $row, Column $column) => [
        'type' => Str::endsWith($value, 'example.org') ? 'success' : 'danger',
        'dismissible' => true,
    ]),
```

Please also see the following for other available methods:

- [Available Methods](/tables/columns/available-methods)
- [Column Selection](/tables/columns/column-selection)
- [Secondary Header](/tables/columns/secondary-header)
- [Footer](/tables/columns/footer)
