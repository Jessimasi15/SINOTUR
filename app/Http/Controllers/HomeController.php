<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // View Inicio
    public function index()
    {
        return view('layouts.index');
    }
}
