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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', function(){
	return view('coba');
});

Route::get('/home', function(){
	return view('pages.admin');
});

Route::get('/about', function(){
	return view('pages.about');
});

//  Route::get('/karyawan', function(){
// 	return view('pages.karyawan');
// });

//Route::get('belajar', 'BelajarController@index');
//Route::get('karyawan', 'BelajarController@index');

Route::get('admin', 'Homecontroller@index');
Route::get('laporan', 'Homecontroller@laporan');
Route::get('admin', 'Homecontroller@admin');
Route::post('store', 'Homecontroller@store');

Route::get('/mobil/{id}/edit', 'Homecontroller@edit')->name('edit.mobil');
Route::post('/mobil/{id}/update', 'Homecontroller@update')->name('mobil.update');
Route::get('/mobil/{id}/delete', 'Homecontroller@delete')->name('mobil.delete');

Route::get('login', 'Homecontroller@login');
Route::post('postlogin', 'Homecontroller@postlogin');


