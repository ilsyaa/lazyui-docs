Route::post('form-url', function (Request $request) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'required',
    ]);

    return response()->json([
        'message' => 'Success submitted.',
    ], 200);
})->name('form-backend');
