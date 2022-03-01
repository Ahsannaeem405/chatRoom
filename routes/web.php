<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
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
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

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
    Route::get('radio', [\App\Http\Controllers\AdminController::class, 'radio']);
    Route::get('clearchat',[\App\Http\Controllers\AdminController::class,'clearchat']);
    Route::post('delete_chat',[\App\Http\Controllers\AdminController::class,'delete_chat']);
    Route::get('clearguest',[\App\Http\Controllers\AdminController::class,'clearguest']);
    Route::post('delete_guest',[\App\Http\Controllers\AdminController::class,'delete_guest']);
    Route::get('role',[\App\Http\Controllers\AdminController::class,'role']);
    Route::post('user_delete/{id}',[\App\Http\Controllers\AdminController::class,'user_delete']);
    Route::post('update_user/{id}',[\App\Http\Controllers\AdminController::class,'update_user']);
    Route::get('header',[\App\Http\Controllers\AdminController::class,'header']);
    Route::post('update_header/{id}',[\App\Http\Controllers\AdminController::class,'update_header']);
    Route::get('Ip',[\App\Http\Controllers\AdminController::class,'Ip']);
    Route::get('setting',[\App\Http\Controllers\AdminController::class,'setting']);
    Route::get('appearance',[\App\Http\Controllers\AdminController::class,'appearance']);










});
Route::post('updateProfile/{id}',[\App\Http\Controllers\AdminController::class,'updateProfile']);

Route::prefix('/user')->middleware(['auth','user'])->group(function () {
    Route::get('/chat', [\App\Http\Controllers\UserController::class, 'chat']);
    Route::post('/sendMSG', [\App\Http\Controllers\UserController::class, 'sendMSG']);
    Route::get('/getMSG', [\App\Http\Controllers\UserController::class, 'getMSG']);
    Route::get('/deletemessage', [\App\Http\Controllers\UserController::class, 'deletemessage']);
    Route::get('/likemessage', [\App\Http\Controllers\UserController::class, 'likemessage']);
});

