<?php

namespace upro\Admin;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['street1','street2','zipcode'];

    public function client() 
    {
    	return $this->belongsTo(Client::class);
    }

    public function country()
    {
    	return $this->hasOne(Countries::class);
    }
}
