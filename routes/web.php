<?php

use App\Http\Controllers\MasterController;
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

Route::get('/', [MasterController::class, 'home']);
Route::get('/detail/{id}', [MasterController::class, 'detail']);
Route::get('/category/{id}', [MasterController::class, 'category']);
Route::get('/publisherlist', [MasterController::class, 'publisherlist']);
Route::get('/publisher/{id}', [MasterController::class, 'publisher']);
Route::get('/contact', [MasterController::class, 'contact']);
