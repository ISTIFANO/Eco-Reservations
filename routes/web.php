<?php

use App\Http\Controllers\SalleController;
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
Route::get('/', function () {
    return view('pages.Home');
});
Route::get('/Login', function () {
    return view('pages.Login');
});

Route::get('/Signup', function () {
    return view('pages.Signup');
});
