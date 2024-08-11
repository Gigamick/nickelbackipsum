<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IpsumController;

Route::get('/', function () {
    return view('welcome');
});

// a post to /get-ipsum
Route::post('/get-ipsum', [IpsumController::class, 'getIpsum']);
Route::view('/about', 'about');