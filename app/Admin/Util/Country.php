<?php 

namespace upro\Admin\Util;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

  protected $fillable = ['code', 'name', 'top'];  
  
}
