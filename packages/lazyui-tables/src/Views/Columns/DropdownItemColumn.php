<?php

namespace Rappasoft\LaravelLivewireTables\Views\Columns;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Rappasoft\LaravelLivewireTables\Views\Column;

class DropdownItemColumn extends Column
{
    protected string $type = 'button'; // a or button
    protected string|Closure|null $confirmMessage = null;

    protected ?string $handleFunction = null;
    protected string $view = 'livewire-tables::includes.columns.dropdown-item';

    public function __construct(string $title, ?string $from = null)
    {
        parent::__construct($title, $from);

        if (! isset($from)) {
            $this->label(fn () => null);
        }
    }

    public function getContents(Model $row): null|string|\Illuminate\Support\HtmlString|\Rappasoft\LaravelLivewireTables\Exceptions\DataTableConfigurationException|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $confirmMessage = null;
        if ($this->confirmMessage) {
            if (is_callable($this->confirmMessage)) {
                $confirmMessage = app()->call($this->confirmMessage, ['row' => $row]);
            } else {
                $confirmMessage = $this->confirmMessage;
            }
        }

        return view($this->getView())
            ->withColumn($this)
            ->withRow($row)
            ->withType($this->type)
            ->withTitle($this->getTitle($row))
            ->withConfirmMessage($confirmMessage)
            ->withHandleFunction($this->handleFunction)
            ->withAttributes($this->hasAttributesCallback() ? app()->call($this->getAttributesCallback(), ['row' => $row]) : []);
    }

    public function type(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function confirmMessage(string|Closure $message): static
    {
        $this->confirmMessage = $message;
        return $this;
    }

    public function handle(string $function): static
    {
        $this->handleFunction = $function;
        return $this;
    }
}
