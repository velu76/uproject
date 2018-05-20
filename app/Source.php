<?php

namespace upro;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
  public function sourcesCollection()
  {
  	return $this->all();
  }

  public function dtsources($query)
  {
  	$limit = $query['query']['limit'] ?: 5;
    $offset = $query['query']['offset'] ?: 0;
    $sort =  $query['query']['sort'] ?: 'text';
    $order = $query['query']['order'] ?: 'asc';	

  	return $this->orderBy($sort,$order)
  				->offset($offset)
  				->limit($limit)
  				->get();
  }
}
