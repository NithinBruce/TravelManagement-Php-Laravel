<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstPageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::post('form-submit',[App\Http\Controllers\MyFirstPageController::class,'create']);   
Route::get('/hello-world', [App\Http\Controllers\MyFirstPageController::class, 'sayHello']);
