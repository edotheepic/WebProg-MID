<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);
Route::get('/category/{id}', [HomeController::class, 'category']);
Route::get('/publisherlist', [HomeController::class, 'publisherlist']);
Route::get('/publisher/{id}', [HomeController::class, 'publisher']);
Route::get('/contact', [HomeController::class, 'contact']);
