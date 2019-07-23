<?php

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

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '', 'namespace' => 'Frontend'], function () {
    Route::get('/', 'TrekController@index');
    Route::get('packages', 'PageController@packages');
    Route::get('book', 'PageController@book');
    Route::get('about', 'PageController@about');
    Route::get('contact', 'PageController@contact');

});


Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () {
    Route::get('/', 'AdminController@index')->name('Admin');
    Route::get('add-admin', 'AdminController@addAdmin')->name('add-admin');
    Route::post('add-new-admin', 'AdminController@addAction')->name('add-new-admin');
    Route::get('view-admin', 'AdminController@viewAdmin')->name('view-admin');
    Route::get('edit-admin/{id}', 'AdminController@editAdmin')->name('edit-admin');
    Route::get('delete-admin/{id}', 'AdminController@deleteAdmin')->name('delete-admin');
    Route::post('update-admin/{id}', 'AdminController@updateAdmin')->name('update-admin');

    Route::get('add-places', 'PlaceController@addPlaces')->name('add-places');
    Route::post('add-new-place', 'PlaceController@addPlace')->name('add-new-place');
    Route::get('view-places', 'PlaceController@viewPlaces')->name('view-places');
    Route::get('edit-place/{id}', 'PlaceController@editPlace')->name('edit-place');
    Route::post('update-place/{id}', 'PlaceController@updatePlace')->name('update-place');
    Route::get('delete-place/{id}', 'PlaceController@deletePlace')->name('deletePlace');
});


