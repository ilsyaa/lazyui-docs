<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/installation', function () {
    return view('docs.installation');
})->name('installation');

Route::group([
    'prefix' => 'overlay'
], function () {
    Route::get('dialog', fn() => view('docs.overlay.dialog.index'))->name('overlay.dialog');
    Route::get('dropdown', fn() => view('docs.overlay.dropdown.index'))->name('overlay.dropdown');
    Route::get('sheet', fn() => view('docs.overlay.sheet.index'))->name('overlay.sheet');
});

Route::group([
    'prefix' => 'display'
], function () {
    Route::get('button', fn() => view('docs.display.button.index'))->name('display.button');
    Route::get('card', fn() => view('docs.display.card.index'))->name('display.card');
});
