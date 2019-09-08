<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{
    Category,
    Product
};

use KarimIMG;

class DashboardProductController extends Controller
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

    public function add(){

        return view('products.dashboard.add' );

    }
    public function store(Request $request){

        //dd( $request->name );

        $product = Product::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'description' => $request->description,
            'photo' => 'none',
            'category_id' => $request->category_id ,
        ]);

        $product = KarimIMG::store($request, $product);


        return redirect()->route('dashboard.products.show', $product->id );

    }

    public function index(){

        $products = Product::paginate(20);

        return view('products.dashboard.index', compact('products') );

    }

    public function show(Product $product){

        return view('products.dashboard.show', compact('product') );

    }

    public function search(Request $request)
    {
        $q= $request->input('q');

        if($q != ""){
            $products = Product::where('titre', 'like', '%' . $q . '%')->paginate(20);

            return view('products.dashboard.index',compact('products') );
            
        }else{
            return back();
        }

    }

    public function update(Request $request, Product $product){

        $product->titre = $request->titre;
        $product->prix = $request->prix;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        $product->save();

        $product = KarimIMG::update($request, $product);


        return redirect()->route('dashboard.products.show', $product->id );

    }

    public function edit(Product $product){


        return view('products.dashboard.edit', compact('product') );

        

    }


    public function delete(Product $product){

        $product->delete();

        return back();



    }












}
