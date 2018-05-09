<?php

use upro\Admin\Util\Country;
use upro\Admin\Client;
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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/clients', 'AdminController@clients')->name('admin_clients');

Route::get('/countries', function(Country $cnty) {	
	return $cnty->countryCollection();	
});

Route::get('/getClients', function(Client $client) {	
	return $client->clientsCollection();
});

Route::post('/clients', 'ClientController@store');
