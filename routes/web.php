<?php

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

// Route::get('/', function () {
//     return view('HomePage');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::get('/userlist', [App\Http\Controllers\UserController::class, 'displayUserList']);
Route::get('/userlist/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser']);

Route::get('/vbl', [App\Http\Controllers\VBLController::class, 'getAllVBLHeader']);    
Route::get('/vbl/detail/{id}/{detailId}', [App\Http\Controllers\VBLController::class, 'getVBLDetail']);