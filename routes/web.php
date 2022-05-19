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
    return view('log');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('dealerships', [App\Http\Controllers\DealershipController::class, 'index']);
Route::get('dealerships/booking', function () {return view('booking');})->name('book.deal');
Route::get('content/article1', function () {return view('contentArtikel');});
Route::get('dashboard', function () {return view('log');})->name('dashboard');
Route::get('dealerships', [App\Http\Controllers\DealershipController::class, 'index'])->name('dealerships');


#Route::get('/dealerships', function () {return view('dealership');})->middleware(['auth'])->name('dealership');