<?php

use App\Http\Controllers\AboutAdamController;
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

Route::get('/', [AboutAdamController::class, 'index'])->name('index');

Route::get('/{id}', [AboutAdamController::class, 'show'])->name('show');

//Uploading message contact form to database.
Route::post('/contact', [AboutAdamController::class, 'store'])->name('store');