<?php

namespace upro;

use upro\Source;
use upro\Status;
use upro\Category;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public function source()
    {
    	return $this->belongsTo(Source::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function status()
    {
    	return $this->belongsTo(Status::class);
    }
}
