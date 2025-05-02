<x-select.multiple.ssr
    name="language[]"
    url="/api/select/users"
/>

<x-select.multiple.ssr
    name="language[]"
    url="/api/select/users"
    x-init="setSelected([{ label: 'Ilsyaa', value: 1 }, { label: 'Nakiri', value: 2 }])"
/>
