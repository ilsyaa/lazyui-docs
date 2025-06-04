---
title: Sum Columns (beta)
weight: 15
---

Sum columns provide an easy way to display the "Sum" of a field on a relation.

```php
    SumColumn::make('Total Age of Related Users')
        ->setDataSource('users','age')
        ->sortable(),
```

The "sortable()" callback can accept a callback, or you can use the default behaviour, which calculates the correct field to sort on.

Please also see the following for other available methods:

- [Available Methods](/tables/columns/available-methods)
- [Column Selection](/tables/columns/column-selection)
- [Secondary Header](/tables/columns/secondary-header)
- [Footer](/tables/columns/footer)
