<?php

namespace upro;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
  public function sourcesCollection()
  {
  	return $this->all();
  }
}
