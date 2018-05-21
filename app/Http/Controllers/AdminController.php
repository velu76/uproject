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

    public function sources(Source $source)
    {
        $srcs = $source->dtsources(4); 
        // var_dump($srcs);
        // dd("Stop Here!");
    	return view('admin.sources', compact('srcs'));
    }

    // For vue related components -- on hold
    public function getDTsources(Request $request, Source $source)
    {
        $query = $request->all();
        return $source->dtsources($query);
    }

}
