---
title: Avg Columns (beta)
weight: 3
---

Avg columns provide an easy way to display the "Average" of a field on a relation.

```php
    AvgColumn::make('Average Related User Age')
        ->setDataSource('users','age')
        ->sortable(),
```

The "sortable()" callback can accept a callback, or you can use the default behaviour, which calculates the correct field to sort on.

Please also see the following for other available methods:
- [Available Methods](/tables/columns/available-methods)
- [Column Selection](/tables/columns/column-selection)
- [Secondary Header](/tables/columns/secondary-header)
- [Footer](/tables/columns/footer)
