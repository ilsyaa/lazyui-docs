<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\DropdownColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\DropdownItemColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setAdditionalSelects(['id', 'image'])
            ->setQueryStringStatus(false)
            ->setQueryStringStatusForFilter(false);

        $this->setBulkActionsEnabled()
            ->setHideBulkActionsWhenEmptyEnabled()
            ->setBulkActions([
                'handleDelete' => 'Delete',
            ])
            ->setBulkActionConfirmMessages([
                'handleDelete' => 'Are you sure you want to delete selected records?',
            ]);

        $this->setFilterLayoutPopover();
    }

    public function columns(): array
    {
        return [
            ImageColumn::make('Avatar')
                ->location(fn($row) => Storage::url($row->image))
                ->attributes(fn($row) => [
                    'class' => 'relative h-9 w-9 rounded-full overflow-hidden',
                    'alt' => $row->name,
                ]),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Collapse")
                ->label(fn ($row) => 'lorem ipsum dolor sit amet')
                ->collapseAlways(),
            BooleanColumn::make("Verified", "email_verified_at"),
            Column::make("Member Since", "created_at")
                ->format(fn($value) => $value->diffForHumans())
                ->sortable(),
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
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('E-mail Verified', 'email_verified_at')
                ->setFilterPillTitle('Verified')
                ->options([
                    ''    => 'All',
                    'yes' => 'Yes',
                    'no'  => 'No',
                ])
                ->filter(function($builder, $value) {
                    if ($value === 'yes') {
                        $builder->whereNotNull('email_verified_at');
                    } elseif ($value === 'no') {
                        $builder->whereNull('email_verified_at');
                    }
                }),
            DateFilter::make('Verified From')
                ->filter(function($builder, $value) {
                    $builder->where('email_verified_at', '>=', $value);
                }),
            DateFilter::make('Verified To')
                ->filter(function($builder, $value) {
                    $builder->where('email_verified_at', '<=', $value);
                }),
            MultiSelectFilter::make('Roles')
                ->options([
                    'admin' => 'Admin',
                    'user'  => 'User',
                    'staff' => 'Staff',
                    'secretary' => 'Secretary',
                    'teacher' => 'Teacher',
                    'student' => 'Student',
                    'guest' => 'Guest',
                ]),
        ];
    }

    public function builder(): Builder
    {
        return User::query();
    }

    public function handleDelete(int|string|null $id = null): void
    {
        try {
            $query = User::query();
            $message = '';

            if ($id) {
                $query->whereKey($id);
                $message = 'Deleted record';
            } elseif ($this->getSelectAllStatus()) {
                $message = 'Deleted all records';
            } else {
                $selected = $this->getSelected();
                if (empty($selected)) throw new \Exception('No records selected.');
                $query->whereIn('id', $selected);
                $message = 'Deleted ' . count($selected) . ' records';
            }

            $query->delete();
            $this->clearSelected();

            $this->dispatch('toast', [
                'type' => 'success',
                'title' => $message
            ]);
        } catch (\Throwable $e) {
            report($e);
            $this->dispatch('toast', [
                'type' => 'error',
                'title' => $e->getMessage()
            ]);
        }
    }
}
