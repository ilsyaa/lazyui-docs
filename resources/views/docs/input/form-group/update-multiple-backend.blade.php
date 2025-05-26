
Route::post('form-example-update/{id}', function (Request $request, $id) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'nullable',
        'image' => 'nullable|array',
        'image.*' => 'nullable|image',
        'existing_image' => 'nullable|array',
    ]);

    try {
        $table = Model::find($id);
        $table->name = $request->input('name');

        $newImages = [];
        $missingImages = array_diff($table->image, $request->input('existing_image', []));
        $existingImages = array_intersect($table->image, $request->input('existing_image', []));
        if($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $newImages[] = $image->store('example');
            }
        }
        $table->image = array_merge($existingImages, $newImages);

        $table->save();

        return response()->json([
            'message' => 'Update Success.',
            'data' => [
                'existing_image' => $table->image
            ]
        ]);
    } catch (\Throwable $th) {
        return response()->json([
            'message' => $th->getMessage(),
        ], 500);
    }
})->name('form-example-update');
