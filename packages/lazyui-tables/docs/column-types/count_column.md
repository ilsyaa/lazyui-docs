---
title: Count Columns (beta)
weight: 8
---

Count columns provide an easy way to display the "Count" of a relation.

```php
    CountColumn::make('Related Users')
        ->setDataSource('users')
        ->sortable(),
```

The "sortable()" callback can accept a callback, or you can use the default behaviour, which calculates the correct field to sort on.

Please also see the following for other available methods:

- [Available Methods](/tables/columns/available-methods)
- [Column Selection](/tables/columns/column-selection)
- [Secondary Header](/tables/columns/secondary-header)
- [Footer](/tables/columns/footer)
