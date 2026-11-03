<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/feedback', function () {
    echo "<h1>Jūs ievadījāt:</h1>";
    echo "Jūsu vārds: $_POST[name]";
    echo "<br><br>";
    echo "Jūsu komentārs:  $_POST[comment]";
});
