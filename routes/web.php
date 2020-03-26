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
    return view('user.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/results', 'User\ResultController@store')->name('user.result.store');


/*
Route::get('/admin/diseases/create', 'Admin\DiseaseController@create')->name('admin.diseases.create');
Route::post('/admin/diseases/create', 'Admin\DiseaseController@store')->name('admin.diseases.store');

*/
