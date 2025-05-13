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
    Route::get('input', fn() => view('docs.input.input.index'))->name('input.input');
    Route::get('label', fn() => view('docs.input.label.index'))->name('input.label');
    Route::get('radio', fn() => view('docs.input.radio.index'))->name('input.radio');
    Route::get('select', fn() => view('docs.input.select.index'))->name('input.select');
    Route::get('select-multiple', fn() => view('docs.input.select-multiple.index'))->name('input.select.multiple');
    Route::get('switch', fn() => view('docs.input.switch.index'))->name('input.switch');
    Route::get('textarea', fn() => view('docs.input.textarea.index'))->name('input.textarea');
});

Route::group([], function () {
    Route::get('breadcrumb', fn() => view('docs.display.breadcrumb.index'))->name('display.breadcrumb');
    Route::get('button', fn() => view('docs.display.button.index'))->name('display.button');
    Route::get('card', fn() => view('docs.display.card.index'))->name('display.card');
    Route::get('nav', fn() => view('docs.display.nav.index'))->name('display.nav');
});

Route::get('test-livewire', fn() => view('docs.livewire'))->name('test-livewire');

Route::post('form-url', function (Request $request) {
    if(!$request->ajax()) abort(404);

    $request->validate([
        'name' => 'required',
    ]);

    return response()->json([
        'message' => 'Success submitted.',
    ], 200);
})->name('form-backend');
