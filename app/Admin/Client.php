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

    public function clientsCollection() 
    {
		$clients = $this->latest('created_at')->get();        
		// $clnts = [];
		// foreach($clients as $client){	
		// 	$clnts[$client->id] = ['text'=>$client->name, 'value'=>$client->id];				
		// }	
  //       // var_dump($clnts);
		return $clients;
  }
}
