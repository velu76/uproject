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
  	$limit = $query['query']['limit'];
    $offset = $query['query']['offset'];
    $sort =  $query['query']['sort'];
    $order = $query['query']['order'];
	
	if ($sort == null)
		$sort = 'text';
	if ($order == null)
		$order = 'asc';
	

  	return $this->orderBy($sort,$order)
  				->offset($offset)
  				->limit($limit)
  				->get();
  }
}
