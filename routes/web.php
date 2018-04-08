<?php

use upro\Admin\Util\Country;
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

Route::get('/bids', 'BidsController@index')->name('bids');

Route::get('/countries', function(Country $cnty) {
	return $cnty->countryCollection();	
});

Route::post('/clients', 'ClientController@store');
