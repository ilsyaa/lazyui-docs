@php($actionWrapperAttributes = $this->getActionWrapperAttributes())
<div {{ $attributes
            ->merge($this->actionWrapperAttributes)
            ->class([
                'flex flex-cols py-2 space-x-2' => ($actionWrapperAttributes['default-styling'] ?? true),
                '' => ($actionWrapperAttributes['default-colors'] ?? true),
                'justify-start' => $this->getActionsPosition === 'left',
                'justify-center' => $this->getActionsPosition === 'center',
                'justify-end' => $this->getActionsPosition === 'right',
                'pl-2' => $this->showActionsInToolbar && $this->getActionsPosition === 'left',
                'pr-2' => $this->showActionsInToolbar && $this->getActionsPosition === 'right',
            ])
            ->except(['default','default-styling','default-colors'])
        }} >
    @foreach($this->getActions as $action)
        {{ $action->render() }}
    @endforeach
</div>
