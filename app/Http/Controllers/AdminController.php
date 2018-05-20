<?php

namespace upro\Http\Controllers;

use Illuminate\Http\Request;
use upro\Source;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function clients()
    {
    	return view('admin.clients');
    }

    public function sources()
    {
    	return view('admin.sources');
    }

    public function getDTsources(Request $request, Source $source)
    {
        $query = $request->all();
        return $source->dtsources($query);
    }

}
