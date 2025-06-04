<?php

use Illuminate\Support\Facades\Route;

Route::prefix('tables')->name('docs.')->group(function () {
    Route::get('/', [App\Http\Controllers\TableDocsController::class, 'index'])->name('index');
    Route::get('/{section}/{page}', [App\Http\Controllers\TableDocsController::class, 'show'])->name('section');
});
