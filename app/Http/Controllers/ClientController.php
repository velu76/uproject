<?php

namespace upro\Http\Controllers;

use upro\Admin\Client;
use upro\Admin\Address;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Form data
        $validatedData = $request->validate([
            'name' => 'bail|required',
            'street1' => 'required',
            'street2' => 'min:0|max:100',
            'country' => 'required',
            'zip' => 'required'            
        ]);

        // Create a new address but don't save it to DB yet.
        $address = new Address([
            'street1' => $request['street1'],
            'street2' => $request['street2'],
            'zip' => $request['zip'],
            'country' => $request['country']
        ]);

        // Create a client but don't save it to DB yet.
        $client = new Client([
            'name' => $request['name']
        ]);

        // Now update relation and save to DB.
        $client->address()->save($address);
        $client->save();

        return back()->with('status', 'Client Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \upro\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \upro\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \upro\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \upro\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
