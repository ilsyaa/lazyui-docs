<x-select.ssr
    display-icon="true"
    name="user"
    url="/api/select/users"
    placeholder="Select a user"
/>

<!-- selected <option value="1">Ilsyaa</option> -->
<x-select.ssr
    name="user"
    url="/api/select/users"
    placeholder="Select a user"
    x-init="setSelected({ label: 'Ilsyaa', value: 1 })"
/>
