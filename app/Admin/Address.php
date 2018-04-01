<?php

namespace upro\Admin;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['street1','street2','zipcode'];
}
