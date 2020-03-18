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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/main', 'HomeController@main')->name('main.index');
Route::post('/admin/main/save', 'HomeController@main_save')->name('main.save');

Route::get('/admin/sub_page/index', 'HomeController@sub_page')->name('sub_page.index');
Route::post('/admin/sub_page/save', 'HomeController@sub_page_save')->name('sub_page.save');
Route::post('/admin/sub_page/update', 'HomeController@sub_page_update')->name('sub_page.update');
Route::get('/admin/sub_page/delete/{id}', 'HomeController@sub_page_delete')->name('sub_page.delete');

Route::get('/{id}', 'IndexController@sub_page')->name('sub_page');
