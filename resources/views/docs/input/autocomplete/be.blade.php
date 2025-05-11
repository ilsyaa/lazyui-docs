Route::get('/autocomplete/users', function (Request $request) {
    $search = $request->search;

    return \App\Models\User::select('name')
        ->where('name', 'like', '%' . $search . '%')
        ->limit(10)
        ->get()
        ->pluck('name');
});
