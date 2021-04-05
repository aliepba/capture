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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/albums', 'AlbumsController@index')->name('album');
Route::get('/{slug}', 'AlbumsController@details')->name('detail');
Route::get('/about', 'AboutController@index')->name('about');

Route::prefix('admin')->namespace('Admin')
                                ->middleware('auth')
                                ->group(function(){
                                    Route::get('/', 'DashboardController@index')->name('dashboard');
                                    Route::resource('gallery', 'GalleryController');
                                    Route::resource('category', 'CategoryController');
                                    Route::resource('location', 'LocationController');
                                    Route::resource('album', 'AlbumController');
                                });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
