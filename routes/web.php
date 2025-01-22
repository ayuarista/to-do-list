<?php

use App\Http\Controllers\Halo\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/coba', function () {
//     return view('halo.coba');
// });

Route::get('/coba', [HaloController::class, 'coba']);

Route::get('/todo', function() {
    return view('todo.app');
});
