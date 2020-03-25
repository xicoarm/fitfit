<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{

    public function index(){

        return view('shop');
}

    public function second($product)
    {
//        return Redirect::route('sample-product')->with('product'. $product);
        return view('sample-product')->with('product', $product);

            }
}

