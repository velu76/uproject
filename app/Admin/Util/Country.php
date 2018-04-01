<?php 

namespace upro\Admin\Util;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

  protected $fillable = ['top'];  

  public function countryCollection() {
	$countries = $this->all();
	$countryCollection = [];
	foreach($countries as $country){	
		array_push($countryCollection,$country->name);		
	}
	return $countryCollection;
  }
  
}
