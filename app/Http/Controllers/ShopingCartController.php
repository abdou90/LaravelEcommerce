<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
class ShopingCartController extends Controller
{
    public function add(Request $request, Product $product ){



        $howMany = (int)$request->howmany;

        

        $shoping_cart = Session::get('shoping_cart', function(){

            $shoping_cart = [];

            $shoping_cart['products'] = [];
            $shoping_cart['total'] = 0;
            return $shoping_cart;
        });

        



        if( array_key_exists($product->id ,$shoping_cart['products'] ) ){

            $shoping_cart['products'][ $product->id ]['quantity']+= $howMany ; 



            


        }else{
            $shoping_cart['products'][ $product->id ]['quantity'] = $howMany;



        }



        $total = $shoping_cart['total'];

        $total += $howMany * $product->prix;



        $shoping_cart['total'] = $total;



        Session::put('shoping_cart', $shoping_cart);

        return redirect()->route('shopingcart.show');

    }

    public function show(){

        $shoping_cart = Session::get('shoping_cart', function(){

            $shoping_cart = [];

            $shoping_cart['products'] = [];
            $shoping_cart['total'] = 0;
            return $shoping_cart;
        });

        return view('cart.show', compact('shoping_cart'));

    }

    public function plus(Request $request, Product $product){

        $howmany = $request->howmany;

        $shoping_cart = Session::get('shoping_cart');

        $quantity = $shoping_cart['products'][$product->id]['quantity'];

        $total = $shoping_cart['total'];

        $total += $howmany * $product->prix;

        $quantity+= $howmany;

        $shoping_cart['products'][$product->id]['quantity'] = $quantity;

        $shoping_cart['total'] = $total;

        Session::put('shoping_cart', $shoping_cart);

        return redirect()->route('shopingcart.show');
    }

    public function minus(Request $request, Product $product){

        $howmany = $request->howmany;

        

        $shoping_cart = Session::get('shoping_cart');

        $quantity = $shoping_cart['products'][$product->id]['quantity'];

        $total_quantity = $quantity - $howmany;

        if( $total_quantity < 0 ){

            return self::cancelItem( $product );

        }

        $total = $shoping_cart['total'];

        $total -= $howmany * $product->prix;

        $quantity-= $howmany;

        $shoping_cart['products'][$product->id]['quantity'] = $quantity;

        $shoping_cart['total'] = $total;

        Session::put('shoping_cart', $shoping_cart);

        return redirect()->route('shopingcart.show');
    }

    public function cancelItem(Product $product){
        $shoping_cart = Session::get('shoping_cart');

        $quantity = $shoping_cart['products'][$product->id]['quantity'];

        $total = $shoping_cart['total'];

        $total -= $quantity * $product->prix;

        $shoping_cart['total'] = $total;

        unset($shoping_cart['products'][$product->id]);

        Session::put('shoping_cart', $shoping_cart);

        return redirect()->route('shopingcart.show');
    }




    public function cancelAll(){

        $shoping_cart = [];

        $shoping_cart['products'] = [];
        $shoping_cart['total'] = 0;

        Session::put('shoping_cart', $shoping_cart);


        return redirect()->route('shopingcart.show');

    }





}
