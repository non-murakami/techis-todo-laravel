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
    return view('welcome');
});

Auth::routes();

Route::get('/home' , [App\Http\Controllers\HomeController::Class, 'index'])->name('home');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
Route::post('/create', [App\Http\Controllers\TaskController::class, 'create']);
Route::delete('/delete/{taskId}', [App\Http\Controllers\TaskController::class, 'delete']);
