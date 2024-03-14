<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // specify the name of the .blade.php name file within the resource/view folder
    return view("home");
});
// Route::view("/view", "home"); this is the same as the ::get route


