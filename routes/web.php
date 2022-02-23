<?php

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

Route::get('/', function () {
return redirect('login');
});

Auth::routes();


Route::post('/guestLogin', [\App\Http\Controllers\UserController::class, 'guest']);
Route::get('/logout', function () {
Auth::logout();
Session::flush();
return redirect('/');
});


Route::prefix('/admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/index', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/users', [\App\Http\Controllers\AdminController::class, 'users']);
    Route::get('/users/del/{id}', [\App\Http\Controllers\AdminController::class, 'userDelete']);

});

Route::prefix('/user')->middleware(['auth','user'])->group(function () {
    Route::get('/chat', [\App\Http\Controllers\UserController::class, 'chat']);
    Route::post('/sendMSG', [\App\Http\Controllers\UserController::class, 'sendMSG']);
    Route::get('/deletemessage', [\App\Http\Controllers\UserController::class, 'deletemessage']);
});

