<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = Product::paginate(12);

        $carousels = Product::limit(5)->get();

        //dd(  $products );

        return view('welcome', compact('products', 'carousels') );
    }
}
