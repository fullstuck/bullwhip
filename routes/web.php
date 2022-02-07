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
    return view('pages.login.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', function () {
        return view('pages.admin.index');
    })->name('index'); 

    Route::group(['prefix' => 'bagian', 'as' => 'bagian.'], function() {
        Route::get('/', 'BagianController@index')->name('index');
        Route::get('/add', 'BagianController@add')->name('add');
        Route::get('/edit/{id}', 'BagianController@edit')->name('edit');
        Route::post('/create', 'BagianController@create')->name('create');
        Route::post('/update', 'BagianController@update')->name('update');
        Route::get('/delete/{id}', 'BagianController@delete')->name('delete');
    });

    Route::group(['prefix' => 'barang', 'as' => 'barang.'], function() {
        Route::get('/', 'BarangController@index')->name('index');
        Route::get('/add', 'BarangController@add')->name('add');
        Route::get('/edit/{id}', 'BarangController@edit')->name('edit');
        Route::post('/create', 'BarangController@create')->name('create');
        Route::post('/update', 'BarangController@update')->name('update');
        Route::get('/delete/{id}', 'BarangController@delete')->name('delete');
    });

    Route::group(['prefix' => 'pegawai', 'as' => 'pegawai.'], function() {
        Route::get('/', 'PegawaiController@index')->name('index');
        Route::get('/add', 'PegawaiController@add')->name('add');
        Route::get('/edit/{id}', 'PegawaiController@edit')->name('edit');
        Route::post('/create', 'PegawaiController@create')->name('create');
        Route::post('/update', 'PegawaiController@update')->name('update');
        Route::get('/delete/{id}', 'PegawaiController@delete')->name('delete');
    });

    Route::get('/logout', 'AdminController@logout')->name('logout'); 
});