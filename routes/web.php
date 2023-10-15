<?php

use App\Http\Controllers\MainUserController;
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
    return view('welcome');
});

Route::get('/home', [MainUserController::class, 'home']);


Route::get('/registration', [MainUserController::class, 'create']);

Route::get('/login', [MainUserController::class, 'login'])->name('login')->middleware('guest');


Route::post('/main_users/authenticate', [MainUserController::class, 'authenticate']);


Route::post('/main_users', [MainUserController::class, 'store']);


Route::post('/users/authenticate', [MainUserController::class, 'authenticate']);

