<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use Illuminate\Support\Facades\Route;

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
    return view('layout');
});
Route::get('try', function () {
    return  view('try');
});
Route::get('signup',function(){
    return view('signup');
});
Route::get('signin',function(){
    return view('signin');
})->name('signin');
Route::get('home',function(){
    return view('home');
})->middleware('checklogin');
Route::get('np',function(){
    return view('np');
})->middleware('checklogin');
Route::post('signup',[SignupController::class,'signup']);
Route::post('signin',[SigninController::class,'signin']);
Route::post('logout',[SigninController::class,'logout']);
