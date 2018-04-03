<?php 

namespace upro\Admin\Util;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

  protected $fillable = ['top'];  

  public function countryCollection() {
	$countries = $this->all();	
	$cnts = [];
	foreach($countries as $country){	
		$cnts[$country->id] = ['text'=>$country->name, 'value'=>$country->id];				
	}	
	return $cnts;
  }
  
}
