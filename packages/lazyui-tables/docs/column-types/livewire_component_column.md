---
title: Livewire Component (beta)
weight: 14
---

Livewire Component Columns allow for the use of a Livewire Component as a Column.

This is **not recommended** as due to the nature of Livewire, it becomes inefficient at scale.

## component
```php
LivewireComponentColumn::make('Action')
    ->component('PathToLivewireComponent'),

```

Please also see the following for other available methods:

- [Available Methods](/tables/columns/available-methods)
- [Column Selection](/tables/columns/column-selection)
- [Secondary Header](/tables/columns/secondary-header)
- [Footer](/tables/columns/footer)
