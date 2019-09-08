<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = Product::paginate(12);

        //dd(  $products );

        return view('welcome', compact('products') );
    }
}
