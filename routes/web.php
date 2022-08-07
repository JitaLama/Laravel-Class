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

Route::get('/','App\Http\Controllers\SiteController@gethome')->name('getHome');
Route::get('/about','App\Http\Controllers\SiteController@getabout')->name('getAbout');
Route::get('/contact','App\Http\Controllers\SiteController@getcontact')->name('getContact');
Route::get('/loginsignup','App\Http\Controllers\SiteController@getloginsignup')->name('getLoginSignup');
Route::get('/bookdetail/{book}','App\Http\Controllers\SiteController@getBookDetail')->name('getBookDetail');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

//Book route
Route::get('/manage/book','App\Http\Controllers\HomeController@getManageBook')->name('getManageBook');
Route::post('/manage/book','App\Http\Controllers\HomeController@getAddBook')->name('postAddBook');
Route::get('/manage/book/delete{book}','App\Http\Controllers\HomeController@getDeleteBook')->name('getDeleteBook');
Route::get('/edit/book/{edit_book}','App\Http\Controllers\HomeController@getEditBook')->name('getEditBook');
Route::post('/edit/book/{edit_book}','App\Http\Controllers\HomeController@postEditBook')->name('postEditBook');
Route::get('/assign/book/{assign_book}','App\Http\Controllers\HomeController@getAssignBook')->name('getAssignBook');

//Add to cart
Route::get('/test/cart','App\Http\Controllers\SiteController@getTestCart')->name('getTestCart');
Route::post('/test/cart','App\Http\Controllers\SiteController@postTestCart')->name('postTestCart');


//FAQ route
Route::get('/manage/FAQ','App\Http\Controllers\HomeController@getManageFAQ')->name('getManageFAQ');
Route::post('/manage/FAQ','App\Http\Controllers\HomeController@getAddFAQ')->name('postAddFAQ');
Route::get('/manage/FAQ/delete{faq}','App\Http\Controllers\HomeController@getDeleteFAQ')->name('getDeleteFAQ');
Route::get('/edit/FAQ/{edit_faq}','App\Http\Controllers\HomeController@getEditFAQ')->name('getEditFAQ');




Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

