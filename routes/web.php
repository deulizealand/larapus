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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function() {
    Route::resource('authors', 'AuthorsController');
    Route::resource('books', 'BooksController');
});

Route::get('/', 'GuestController@index');

Route::get('books/{book}/borrow', [
    'middleware' => ['auth', 'role:member'],
    'as' => 'guest.books.borrow',
    'uses' => 'BooksController@borrow'
]);