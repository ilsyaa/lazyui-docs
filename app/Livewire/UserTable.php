<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ColorColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
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
            // ButtonGroupColumn::make('Actions')
            //     ->attributes(function($row) {
            //         return [
            //             'class' => 'space-x-2',
            //         ];
            //     })
            //     ->buttons([
            //         LinkColumn::make('View')
            //             ->title(fn($row) => 'View')
            //             ->location(fn($row) => '')
            //             ->attributes(function($row) {
            //                 return [
            //                     'class' => 'underline text-blue-500 hover:no-underline',
            //                 ];
            //             }),
            //     ]),
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
