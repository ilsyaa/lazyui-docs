## Installation

You can install the package via composer:

``` bash
composer require ilsyaa/lazyui-tables
```

Use in a [LazyUI](https://github.com/ilsyaa/lazyui) environment for more complete features.

## Documentation and Usage Instructions

See the [documentation](https://github.com/ilsyaa/lazyui-tables/blob/master/docs/start/installation.md) for detailed installation and usage instructions.

## Basic Example

```php
<?php

namespace App\Http\Livewire\Admin\User;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            Column::make('Name')
                ->sortable(),
        ];
    }
}

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
