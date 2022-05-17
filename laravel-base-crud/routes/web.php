<?php

use App\Http\Controllers\FumettiController;
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


/* Route::get('/', 'FumettiController@index');
Route::get('/{id}', 'FumettiController@show')->name("fumetto.show");
Route::get('/create', 'FumettiController@store'); */


route::resource('fumetti', 'FumettiController');

route::prefix('fumetti')->name('fumetto.')->group(function(){
    Route::get('/', 'FumettiController@index')->name('index');
    Route::get('/{id}', 'FumettiController@show')->name("show");
    Route::get('/{id}', 'FumettiController@create')->name("create");
});
