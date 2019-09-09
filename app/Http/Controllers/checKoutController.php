<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class checKoutController extends Controller
{
    public function index() {
        return view('products.checkout');
    }
    public function chargepayment(Request $request)
    {
        dd($request->all()); 
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_DXlQe59OtIkM5CmsL8vGA7lp00ejLsaSNi');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => 999,
            'currency' => 'eur',
            'description' => 'Example charge',
            'source' => $token,
        ]);

        dd($charge);
    }
    //incrementer
    public function incrementer($id) {
        $cart = session()->get('cart');
        //dd($cart , $cart[$id],$cart[$id]['quantity']);
        $cart[$id]['quantity']+=1;
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function decrementer($id) {
        $cart = session()->get('cart');
        if( $cart[$id]['quantity'] == 1 ){
            self::deleteFromCart($id);    
        }
       /* elseif($cart[$id]['quantity'] == 0){

        }*/else{

            $cart[$id]['quantity']-=1;
            session()->put('cart', $cart);
        }
        
        
        return redirect()->back();
    }

    public function deleteFromCart($id) {
        $cart = session()->get('cart');
        unset( $cart[$id] );
        //$cart[$id]['quantity']-=1;
        session()->put('cart', $cart);
        return redirect()->back();
    }
    
}
