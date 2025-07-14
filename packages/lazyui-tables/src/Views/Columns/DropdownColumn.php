<?php

namespace Rappasoft\LaravelLivewireTables\Views\Columns;

use Illuminate\Database\Eloquent\Model;
use Rappasoft\LaravelLivewireTables\Views\Column;

class DropdownColumn extends Column
{
    protected array $lists = [];

    protected string $view = 'livewire-tables::includes.columns.dropdown';

    public function __construct(string $title, ?string $from = null)
    {
        parent::__construct($title, $from);

        $this->label(fn () => null);
    }

    public function getContents(Model $row): null|string|\Illuminate\Support\HtmlString|\Rappasoft\LaravelLivewireTables\Exceptions\DataTableConfigurationException|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view($this->getView())
            ->withColumn($this)
            ->withLists($this->lists)
            ->withRow($row)
            ->withAttributes($this->hasAttributesCallback() ? app()->call($this->getAttributesCallback(), ['row' => $row]) : []);
    }

    public function lists(array $lists): static
    {
        $this->lists = $lists;
        return $this;
    }
}
