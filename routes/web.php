<?php

use Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Auth::routes();

/*
Route::get('auth/login', [AuthController::class, 'getLogin']);
Route::post('auth/login', [AuthController::class, 'postLogin']);
Route::get('auth/logout', [AuthController::class, 'getLogout']);

Route::get('auth/register', [AuthController::class,'getRegister']);
Route::post('auth/register', [AuthController::class, 'postRegister']);

*/
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);
Route::get('/catalog', [HomeController::class, 'catalog']);
Route::get('/find', [HomeController::class, 'find']);