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

Route::get('/countries', function() {
	$tableName = "CV";
	$clist = Country::getCountries();
	$mySql = "Insert into {$tableName}(id, name) values";
	$index = 0;
	foreach($clist as $c){
		$mySql .= " ($index, '$c'),";
		$index += 1;
	}
	$mySql = rtrim($mySql,",") . ';';
	return $mySql;
});
