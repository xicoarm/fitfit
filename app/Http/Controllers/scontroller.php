<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()                   //si esta autorizado
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       echo "hallo funton";
    }
}
