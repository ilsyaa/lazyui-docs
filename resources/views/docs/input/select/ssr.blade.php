<x-select.ssr
    name="user"
    url="/api/users"
    placeholder="Select a user"
/>

<!-- selected <option value="1">Ilsyaa</option> -->
<x-select.ssr
    name="user"
    url="/api/users"
    placeholder="Select a user"
    x-init="setSelected({ label: 'Ilsyaa', value: 1 })"
/>
