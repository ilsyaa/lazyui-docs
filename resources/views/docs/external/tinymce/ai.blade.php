Route::post('ai', function (Request $request) {
    if(!$request->ajax()) abort(404);

    return response()->json([
        'response' => 'Hai there! How can I help you?',
    ], 200);
})->name('ai');
