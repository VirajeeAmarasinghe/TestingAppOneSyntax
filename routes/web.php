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
    return view('layout.layout');
});


Route::get('country/index','App\Http\Controllers\CountryController@index')->name('countries');
Route::get('country/add', 'App\Http\Controllers\CountryController@create')->name('viewCountryForm');
Route::post('country/submit', 'App\Http\Controllers\CountryController@submit')->name('submitCountryForm');

Route::get('country/edit/{id}',[
    'uses'=>'App\Http\Controllers\CountryController@edit',
    'as'=>'country.edit'
]);

Route::get('country/delete/{id}',[
    'uses'=>'App\Http\Controllers\CountryController@delete',
    'as'=>'country.delete'
]);

Route::get('country/loadcountries',[
    'uses'=>'App\Http\Controllers\CountryController@loadCountries',
    'as'=>'country.loadcountries'
]);

Route::post('country/update',[
    'uses'=>'App\Http\Controllers\CountryController@update',
    'as'=>'country.update'
]);

Route::get('state/index',[
    'uses'=>'App\Http\Controllers\StateController@index',
    'as'=>'state.index'
]);

Route::get('state/create',[
    'uses'=>'App\Http\Controllers\StateController@create',
    'as'=>'state.create'
]);

Route::post('state/submit',[
    'uses'=>'App\Http\Controllers\StateController@submit',
    'as'=>'state.submit'
]);

Route::get('state/edit/{id}',[
    'uses'=>'App\Http\Controllers\StateController@edit',
    'as'=>'state.edit'
]);

Route::get('state/delete/{id}',[
    'uses'=>'App\Http\Controllers\StateController@delete',
    'as'=>'state.delete'
]);

Route::post('state/update',[
    'uses'=>'App\Http\Controllers\StateController@update',
    'as'=>'state.update'
]);

Route::get('state/loadstates',[
    'uses'=>'App\Http\Controllers\StateController@loadStates',
    'as'=>'state.loadstates'
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
