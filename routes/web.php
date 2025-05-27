<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/installation', function () {
    return view('docs.installation');
})->name('installation');

Route::get('/layout', function () {
    return view('docs.panel');
})->name('panel');

Route::group([], function () {
    Route::get('alert', fn() => view('docs.overlay.alert.index'))->name('overlay.alert');
    Route::get('dialog', fn() => view('docs.overlay.dialog.index'))->name('overlay.dialog');
    Route::get('dropdown', fn() => view('docs.overlay.dropdown.index'))->name('overlay.dropdown');
    Route::get('popover', fn() => view('docs.overlay.popover.index'))->name('overlay.popover');
    Route::get('sheet', fn() => view('docs.overlay.sheet.index'))->name('overlay.sheet');
    Route::get('toast', function() {
        return view('docs.overlay.toast.index');
    })->name('overlay.toast');
    Route::get('tooltip', fn() => view('docs.overlay.tooltip.index'))->name('overlay.tooltip');
});

Route::group([], function () {
    Route::get('autocomplete', fn() => view('docs.input.autocomplete.index'))->name('input.autocomplete');
    Route::get('autocomplete-multiple', fn() => view('docs.input.autocomplete-multiple.index'))->name('input.autocomplete.multiple');
    Route::get('checkbox', fn() => view('docs.input.checkbox.index'))->name('input.checkbox');
    Route::get('form', fn() => view('docs.input.form.index'))->name('input.form');
    Route::get('form-group', fn() => view('docs.input.form-group.index'))->name('input.form-group');
    Route::get('input', fn() => view('docs.input.input.index'))->name('input.input');
    Route::get('label', fn() => view('docs.input.label.index'))->name('input.label');
    Route::get('radio', fn() => view('docs.input.radio.index'))->name('input.radio');
    Route::get('select', fn() => view('docs.input.select.index'))->name('input.select');
    Route::get('select-multiple', fn() => view('docs.input.select-multiple.index'))->name('input.select.multiple');
    Route::get('slider', fn() => view('docs.input.slider.index'))->name('input.slider');
    Route::get('switch', fn() => view('docs.input.switch.index'))->name('input.switch');
    Route::get('textarea', fn() => view('docs.input.textarea.index'))->name('input.textarea');
});

Route::group([], function () {
    Route::get('accordion', fn() => view('docs.display.accordion.index'))->name('display.accordion');
    Route::get('avatar', fn() => view('docs.display.avatar.index'))->name('display.avatar');
    Route::get('badge', fn() => view('docs.display.badge.index'))->name('display.badge');
    Route::get('breadcrumb', fn() => view('docs.display.breadcrumb.index'))->name('display.breadcrumb');
    Route::get('button', fn() => view('docs.display.button.index'))->name('display.button');
    Route::get('card', fn() => view('docs.display.card.index'))->name('display.card');
    Route::get('tabs', fn() => view('docs.display.tabs.index'))->name('display.tabs');
    Route::get('table', fn() => view('docs.display.table.index'))->name('display.table');
    Route::get('nav', fn() => view('docs.display.nav.index'))->name('display.nav');
    Route::get('widget', fn() => view('docs.display.widget.index'))->name('display.widget');
});

Route::group([], function () {
    Route::get('apexcharts', fn() => view('docs.external.apexcharts.index'))->name('external.apexcharts');
    Route::get('datatable', fn() => view('docs.external.datatable.index'))->name('external.datatable');
    Route::get('filepond', fn() => view('docs.external.filepond.index'))->name('external.filepond');
    Route::get('tinymce', fn() => view('docs.external.tinymce.index'))->name('external.tinymce');
});

Route::group([], function () {
    Route::get('color-dashboard', fn() => view('docs.style.dashboard.index'))->name('style.dashboard');
});

Route::group([], function () {
    Route::get('packages-installed', fn() => view('docs.other.packages-installed.index'))->name('other.packages-installed');
});

Route::get('test-livewire', fn() => view('docs.livewire'))->name('test-livewire');

Route::post('ai', function (Request $request) {
    if(!$request->ajax()) abort(404);
    $res = Http::post('https://luminai.my.id/', [
        'prompt' => 'Kamu adalah ai tinymce, text editor yang siap membantu apapun. jika ada tag pre berikan class tambanan format class="language-{code}" code sesuai apa isinya.',
        'content' => $request->input('request.prompt'),
        'user' => 'tinymce1'
    ]);
    if ($res->failed()) {
        return response()->json([
            'message' => 'Failed submitted.',
        ], 500);
    }
    return response()->json([
        'response' => $res->json()['result']
    ], 200);
})->name('ai');

Route::post('form-url', function (Request $request) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'required',
    ]);

    return response()->json([
        'message' => 'Success submitted.',
    ], 200);
})->name('form-backend');

Route::post('form-files', function (Request $request) {
    if(!$request->ajax()) abort(404);

    // dd($request->all());
    return response()->json([
        'message' => 'Success submitted.',
    ], 200);
})->name('form-files');


Route::post('form-example-store', function (Request $request) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'nullable',
        'image' => 'nullable|image',
    ]);

    try {
        // $table = new Model();
        // $table->name = $request->input('name');
        // if($request->hasFile('image')) {
        //     $table->image = $request->file('image')->store('docs');
        // }
        // $table->save();

        return response()->json([
            'message' => 'Create Success.',
        ]);
    } catch (\Throwable $th) {
        return response()->json([
            'message' => $th->getMessage(),
        ], 500);
    }
})->name('form-example-store');

Route::post('form-example-update/{id}', function (Request $request, $id) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'nullable',
        // 'image' => 'nullable|array',
        // 'image.*' => 'nullable|image',
        // 'existing_image' => 'nullable|array',
    ]);

    try {
        // $table = Model::find($id);
        // $table->name = $request->input('name');

        // $images = [];
        // $missingImages = array_diff($table->image, $request->input('existing_image', []));
        // $existingImages = array_intersect($table->image, $request->input('existing_image', []));
        // if($request->hasFile('image')) {
        //     foreach ($request->file('image') as $image) {
        //         $images[] = $image->store('example');
        //     }
        // }
        // $table->image = array_merge($existingImages, $images);

        // $table->save();

        return response()->json([
            'message' => 'Update Success.',
            // 'data' => [
            //     'existing_image' => $table->image
            // ]
        ]);
    } catch (\Throwable $th) {
        return response()->json([
            'message' => $th->getMessage(),
        ], 500);
    }
})->name('form-example-update');
