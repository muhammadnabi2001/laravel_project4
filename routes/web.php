<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/',[CategoryController::class,'index']);
Route::get('/post',[Postcontroller::class,'posts']);