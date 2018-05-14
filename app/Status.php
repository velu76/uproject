<?php

namespace upro;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  public function statusesCollection()
  {
  	return $this->all();
  }
}
