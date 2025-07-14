---
title: Dropdown Columns
weight: 5
---

The `DropdownColumn` allows you to define a dropdown menu within a table column. Each item inside the dropdown can be a link, button, or any other action element. You can also assign attributes and confirmation messages to individual items.

```php
DropdownColumn::make('Actions')
    ->lists([
        DropdownItemColumn::make('View')
            ->type('a')
            ->attributes(function($row) {
                return [
                    'href' => $row->id,
                ];
            }),
        DropdownItemColumn::make('Delete')
            ->type('button')
            ->confirmMessage('Are you sure you want to delete this user ?')
            ->handle('handleDelete'),
    ]),
```
