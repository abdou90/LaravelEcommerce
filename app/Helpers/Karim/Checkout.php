<?Php


namespace App\Helpers\Karim;


use Illuminate\Http\Request;


use App\Product;

class Checkout {


    public static function getProductFromId( $id){

        return Product::findOrFail($id);
    }

    public static function retrieveShopingCart( ){

        $shoping_cart = Session::get('shoping_cart', function(){

            $shoping_cart = [];

            $shoping_cart['products'] = [];
            $shoping_cart['total'] = 0;
            return $shoping_cart;
        });

        $total = 0;

        foreach($shoping_cart['products'] as $product_id => $quantity){

            $product = self::getProductFromId( $product_id );

            $total+= $product->prix * $quantity['quantity'];

        }

        $shoping_cart['total'] = $total;

        Session::put('shoping_cart', $shoping_cart);

        return $shoping_cart;

    }




}