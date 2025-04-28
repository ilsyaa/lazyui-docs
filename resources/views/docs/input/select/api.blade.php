Route::get('/users', function (Request $request) {
    return \App\Models\User::select('name as label', 'id as value')
        ->where('name', 'like', '%' . $request->search . '%')
        ->limit(10)
        ->get();
});
