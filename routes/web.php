<?php

use App\Http\Controllers\CatalogController;
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

Route::get('/', [HomeController::class, 'last5']);

Route::get('/catalog', [HomeController::class, 'catalog']);


Route::get('/catalog/{nameSort}/{nap}', [HomeController::class, 'catalogPrice']);

Route::get('/catalog/{idCat}', [HomeController::class, 'filters']);

Route::get('/find', [HomeController::class, 'find']);

Route::get('/comic/{id}', [HomeController::class, 'comic']);



Route::get('/admin/add', [CatalogController::class, 'add']);

Route::get('/admin/add/category', [CatalogController::class, 'addCategory']);

Route::get('/admin/update', [CatalogController::class, 'tovarUpdate']);

Route::get('/admin', [CatalogController::class, 'admin']);