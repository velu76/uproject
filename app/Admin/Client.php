<?php

namespace upro\Admin;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ["name","address_id"];

    public function address() 
    {
    	return $this->hasOne(Address::class);
    }
}
