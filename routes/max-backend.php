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
Route::group(['middleware' => ['web','auth']], function () {
    // manage admin

    //Country
    Route::get('/backend/country','App\Http\Controllers\Backend\CountryController@backend_country');
    Route::get('/backend/country/add','App\Http\Controllers\Backend\CountryController@backend_country_add');
    Route::post('/backend/country/save','App\Http\Controllers\Backend\CountryController@backend_country_save');
    Route::get('/backend/country/edit/{id}','App\Http\Controllers\Backend\CountryController@backend_country_edit');

    //City
    Route::get('/backend/country/city/{id}','App\Http\Controllers\Backend\CountryController@backend_country_city');
    Route::get('/backend/country/city/add/{id}','App\Http\Controllers\Backend\CountryController@backend_country_city_add');
    Route::post('/backend/country/city/save','App\Http\Controllers\Backend\CountryController@backend_country_city_save');
    Route::get('/backend/country/city/edit/{id}','App\Http\Controllers\Backend\CountryController@backend_country_city_edit');
    Route::get('/backend/country/city/delete/{id}','App\Http\Controllers\Backend\CountryController@backend_country_city_delete');
    
    //Enjoy with
    Route::get('/backend/enjoy_with','App\Http\Controllers\Backend\EnjoyController@backend_enjoy_with');
    Route::get('/backend/enjoy_with/add','App\Http\Controllers\Backend\EnjoyController@backend_enjoy_with_add');
    Route::post('/backend/enjoy_with/save','App\Http\Controllers\Backend\EnjoyController@backend_enjoy_with_save');
    Route::get('/backend/country/enjoy_with/edit/{id}','App\Http\Controllers\Backend\EnjoyController@backend_enjoy_with_edit');
    Route::get('/backend/country/enjoy_with/delete/{id}','App\Http\Controllers\Backend\EnjoyController@backend_enjoy_with_delete');
    
});
    

