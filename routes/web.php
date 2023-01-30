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


Route::as('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, "dashboard"])->name('dashboard');


    Route::get('/users', [\App\Http\Controllers\Admin\UsersController::class, "index"])->name('users.index');
    Route::get('/users/create', [\App\Http\Controllers\Admin\UsersController::class, "create"])->name('users.create');
    Route::post('/users', [\App\Http\Controllers\Admin\UsersController::class, "store"])->name('users.store');

});
