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

Route::get('/', [App\Http\Controllers\SiteController::class, 'getHome'])->name('getHome');
Route::get('/search', [App\Http\Controllers\SiteController::class, 'getSearchBook'])->name('getSearchBook');
Route::get('/bookdetail/{book}', [App\Http\Controllers\SiteController::class, 'getBookDetail'])->name('getBookDetail');
Route::get('/about', [App\Http\Controllers\SiteController::class, 'getAbout'])->name('getAbout');
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'getContact'])->name('getContact');
Route::get('/loginsignup', [App\Http\Controllers\SiteController::class, 'getLoginSignup'])->name('getLoginSignup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
