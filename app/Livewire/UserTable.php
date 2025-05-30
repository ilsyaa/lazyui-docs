<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateTimeFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\NumberFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setAdditionalSelects(['id'])
            ->setDefaultSort('created_at', 'desc')
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
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Collapse")
                ->label(fn ($row) => 'lorem ipsum dolor sit amet')
                ->collapseAlways(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
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

    public function handleDelete() {
        if($this->getSelectAllStatus()) {
            dd('delete all');
        } else {
            dd($this->getSelected());
        }
    }
}
