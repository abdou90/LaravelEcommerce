<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Commande;
use App\Category;

class ProductController extends Controller
{
    //
    public function __construct (){
      //  return $this->middleware('auth');
    }
    public function index(){

        $listProduct = Product::all();
        return view ('products.index',['products' => $listProduct]);
    }
    public function create(){
        //$categories = Category::all();
        //return view('products.create',['categories' => $categories]);
        return view('products.create');
    }
    public function store(Request $request){
        $product = new Product();
        $product->titre =$request->input('titre');
        $product->prix =$request->input('prix');
        $product->description =$request->input('description');
        if($photo = $request->file('photo')){
            $name = rand(1, 999999) . '-' . $photo->getClientOriginalName();
            $photo->move('images', $name);
            $product->photo= $name;
        }
        $product->category_id = $request->input('category');
        $product->save();
        return redirect('product');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', ['prod' => $product]); 
    }
    public function update(Request $request,$id){
        $prod = Product::find($id);
        
        $prod->titre=$request->input('titre');
        
        $prod->prix=$request->input('prix');
        $prod->description=$request->input('description');
        $prod->save();
        return redirect('admin/showadmin');
    }
    public function destroy(Request $request,$id){
        $prod = Product::find($id);
        $prod->delete();
        return redirect('product');
    }
    public function show($id) {
        $product = Product::find($id);
        return view('products.show',['product' => $product]);
    }
    
    public function addToCart(Request $request ,$id) {
        /*
        $product = Product::find($id);
        $cart = session()->get('cart');
       
        if(!$cart) {
            $cart = [ $id => ["id" => $product->id, "titre" => $product->titre,"quantity" =>$request->qte,"price" => $product->prix,
                            "photo" => $product->photo]   
                ];
                session()->put('cart', $cart);
                return view('products.cart');
        }
        if(isset($cart[$id])) {
            $cart[$id]['quantity']+=$request->qte;
            session()->put('cart', $cart);
            return view('products.cart');             
        }  
        $cart[$id] = [
            "id"    => $product->id,
            "titre" => $product->titre,
            "quantity" => $request->qte,
            "price" => $product->prix,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart); 
        */
        return view('products.cart');              
    }

    //toTest

    public function addToCart2(Request $request ,$id) {
        $product = Product::find($id);
        $cart = session()->get('cart');
       
        if(!$cart) {
            $cart = [ $id => ["id" => $product->id, "titre" => $product->titre,"quantity" =>$request->qte,"price" => $product->prix,
                            "photo" => $product->photo]   
                ];
                session()->put('cart', $cart);
                return view('products.cart');
        }
        if(isset($cart[$id])) {
            $cart[$id]['quantity']+=$request->qte;
            session()->put('cart', $cart);
            return view('products.cart');             
        }  
        $cart[$id] = [
            "id"    => $product->id,
            "titre" => $product->titre,
            "quantity" => $request->qte,
            "price" => $product->prix,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart); 
        return view('products.cart');              
    }

    public function showAdmin(){
        $products = Product::all();
        return view('products.showAdmin',['products' => $products]);
    }
    public function valider()
    {
        $commande = new Commande();
        $commande->save();
        $cart = session()->get('cart');
        foreach($cart as $product) {
            $commande->products()->attach(
                $product['id'],
                [
                    'quantite' => $product['quantity']
                ]
            );
        }
        return view('products.checkout');
    }
    public function search(Request $request)
    {
        $q= $request->input('q');
        if($q != ""){
            $products = Product::where('titre', 'like', '%' . $q . '%')->get();
            if (count($products)>0){
                return view('products.index',['products' => $products]);
            }
        }
        return view('products.index');
    }
    public function adminPage()
    {
        return view('products.admin');
    }
}
