Route::post('form-example-update/{id}', function (Request $request, $id) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'nullable',
        'image' => 'nullable|image',
    ]);

    try {
        $table = Model::find($id);
        $table->name = $request->input('name');
        if($request->hasFile('image')) {
            $table->image = $request->file('image')->store('example');
        }
        $table->save();

        // You need to resend the latest image to sync the existing files on the fileupload frontend.
        // This is required if you include existing files in the fileupload.
        return response()->json([
            'message' => 'Update Success.',
            'data' => [
                'existing_image' => $table->image, // get image latest
            ]
        ]);
    } catch (\Throwable $th) {
        return response()->json([
            'message' => $th->getMessage(),
        ], 500);
    }
})->name('form-example-update');
