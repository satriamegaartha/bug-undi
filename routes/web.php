<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UndianController;

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

Route::get('/', [UndianController::class, 'index'])->name('index');

Route::prefix('unda')->group(function () {
    Route::get('', [UndianController::class, 'unda'])->name('unda');
    Route::post('/check', [UndianController::class, 'undacheck'])->name('unda.check');
});
Route::prefix('undn')->group(function () {
    Route::get('', [UndianController::class, 'undn'])->name('undn');
    Route::post('/check', [UndianController::class, 'undncheck'])->name('undn.check');
});
