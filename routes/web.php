<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/installation', function () {
    return view('docs.installation');
})->name('installation');

Route::get('/panel', function () {
    return view('docs.panel');
})->name('panel');

Route::group([], function () {
    Route::get('dialog', fn() => view('docs.overlay.dialog.index'))->name('overlay.dialog');
    Route::get('dropdown', fn() => view('docs.overlay.dropdown.index'))->name('overlay.dropdown');
    Route::get('sheet', fn() => view('docs.overlay.sheet.index'))->name('overlay.sheet');
});

Route::group([], function () {
    Route::get('input', fn() => view('docs.input.input.index'))->name('input.input');
    Route::get('label', fn() => view('docs.input.label.index'))->name('input.label');
    Route::get('textarea', fn() => view('docs.input.textarea.index'))->name('input.textarea');
});

Route::group([], function () {
    Route::get('button', fn() => view('docs.display.button.index'))->name('display.button');
    Route::get('card', fn() => view('docs.display.card.index'))->name('display.card');
    Route::get('nav', fn() => view('docs.display.nav.index'))->name('display.nav');
});
