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
    return view('index');
});

Auth::routes(['verify' => true]);
Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::resource('/settings', App\Http\Controllers\ConfigsController::class);
    Route::resource('/users', App\Http\Controllers\UsersController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified']);
});
Route::resource('/master-categories', App\Http\Controllers\MasterCategoriesController::class);
Route::resource('/users', App\Http\Controllers\UsersController::class);
Route::resource('/settings', App\Http\Controllers\ConfigController::class);
Route::resource('/roles', App\Http\Controllers\RoleController::class);
Route::resource('/course', App\Http\Controllers\CoursesController::class);
Route::resource('/chapter', App\Http\Controllers\ChaptersController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');