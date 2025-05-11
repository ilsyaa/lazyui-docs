// simple api
Route::get('/users', function (Request $request) {
    return \App\Models\User::select('name as label', 'id as value')
        ->where('name', 'like', '%' . $request->search . '%')
        ->limit(10)
        ->get();
});

// a more complex example
Route::get('/users', function (Request $request) {
    $search = $request->search;

    $user = \App\Models\User::query()
        ->where('name', 'like', '%' . $search . '%')
        ->limit(10)
        ->get();

    return array_map(function ($user) {
        return [
            'value' => $user['id'],
            'label' => $user['name'],
            'icon' => '',
            'description' => '',
            'disabled' => false
        ];
    }, $user->toArray());
});
