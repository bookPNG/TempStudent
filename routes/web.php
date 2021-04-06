<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;

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

Route::get('/homepage', [TempController::class, 'index'])->name('home');

Route::post('/temperature/add', [TempController::class, 'add'])->name('addtemp');

Route::get('/temperature/average', [TempController::class, 'average'])->name('avgtemp');

Route::get('/temperature/top', [TempController::class, 'top'])->name('toptemp');

Route::get('/temperature/back', [TempController::class, 'back'])->name('back');