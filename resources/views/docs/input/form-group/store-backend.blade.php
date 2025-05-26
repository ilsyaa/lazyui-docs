Route::post('form-example-store', function (Request $request) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'nullable',
        'image' => 'nullable|image',
    ]);

    try {
        $table = new Model();
        $table->name = $request->input('name');
        if($request->hasFile('image')) {
            $table->image = $request->file('image')->store('docs');
        }
        $table->save();

        return response()->json([
            'message' => 'Create Success.',
        ]);
    } catch (\Throwable $th) {
        return response()->json([
            'message' => $th->getMessage(),
        ], 500);
    }
})->name('form-example-store');
