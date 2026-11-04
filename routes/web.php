<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/form', function (Request $request) {
    return view('form', [
        'name' => $request->input('name'),
        'comment' => $request->input('comment'),
    ]);
});
