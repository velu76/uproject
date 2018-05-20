<?php

use upro\Admin\Util\Country;
use upro\Source;
use upro\Category;
use upro\Status;
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
Route::get('/admin/sources', 'AdminController@sources')->name('admin_sources');
Route::post('/admin/getdtsources', 'AdminController@getDTsources');

Route::get('/countries', function(Country $cnty) {	
	return $cnty->countryCollection();	
});

Route::get('/getClients', function(Client $client) {	
	return $client->clientsCollection();
});

Route::get('/getSources', function(Source $source) {	
	return $source->sourcesCollection();
});


Route::get('/getCategories', function(Category $category) {	
	return $category->categoriesCollection();
});

Route::get('/getStatuses', function(Status $status) {	
	return $status->statusesCollection();
});

Route::post('/clients', 'ClientController@store');
