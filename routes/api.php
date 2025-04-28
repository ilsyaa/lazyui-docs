<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function (Request $request) {
    return \App\Models\User::select('name as label', 'id as value')
        ->where('name', 'like', '%' . $request->search . '%')
        ->limit(10)
        ->get();
});
