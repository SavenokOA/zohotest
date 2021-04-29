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

Route::get('/', [\App\Http\Controllers\MainController::class, 'auth'])->name('home');

Route::get('/s', [\App\Http\Controllers\SendController::class, 'create_deal'])->name('send');
Route::get('/g', [\App\Http\Controllers\RefreshController::class, 'generate_refresh_token'])->name('generate_refresh');
Route::get('/ac', [\App\Http\Controllers\AccessController::class, 'create_access_token'])->name('generate_access');
Route::get('/ct', [\App\Http\Controllers\TaskController::class, 'create_task'])->name('create_task');
Route::get('/cr', [\App\Http\Controllers\RelationController::class, 'addRelation'])->name('create_relation');
