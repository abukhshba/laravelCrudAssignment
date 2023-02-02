<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController; //add the ControllerNameSpace

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/product", productController::class);