<?php

namespace upro\Http\Controllers;

use Illuminate\Http\Request;

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
}
