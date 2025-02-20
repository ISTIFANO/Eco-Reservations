<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('salle',SalleController::class);
Route::post('/register',[AuthController::class,'register']);
Route::get('/users',[UserController::class,'show']);

Route::post('/AuthLogin',[AuthController::class,'AuthLogin']);
Route::get('/Admin',[SalleController::class,'index']);
Route::get('/Tsalle',[SalleController::class,'Tsalle']);
Route::post('/Sallecreate',[SalleController::class,'store']);

Route::get('/sales/delete/{id}',[SalleController::class,'destroy']);
Route::get('/sales/edit/{id}',[SalleController::class,'EditForm']);
Route::post('/update',[SalleController::class,'update']);

Route::get('/validate',[ReservationController::class,'show']);






Route::get('/', function () {
    return view('pages.Home');
});
Route::get('/Login', function () {
    return view('pages.Login');
});

Route::get('/Signup', function () {
    return view('pages.Signup');
});
