<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('KhoaHoc', function () {
    echo 'hello';
});

Route::get('hello', [ MyController::class, 'Xinchao' ]); // This is the route that we are going to test

Route::get('form', [ FormController::class, 'Form' ]);
Route::post('sum', [ FormController::class, 'Xulyform' ]);



Route::get('/signup', [signupController::class, 'index']);
Route::post('/signupkq', [signupController::class, 'displayInfor']);

Route::get('/covid', [CovidController::class, 'getData']);



Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);


Route::get('/products', [ProductController::class, 'getProducts']);
Route::get('/products', [ProductController::class, 'index']);