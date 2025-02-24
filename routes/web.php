<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\CovidController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});