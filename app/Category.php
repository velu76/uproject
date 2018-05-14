<?php

namespace upro;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function categoriesCollection()
  {
  	return $this->all();
  }
}
