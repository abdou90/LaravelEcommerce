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


    public function delete(Category $category){

        //dd( $category);

        if(  $category->id != 1   ){

            foreach( $category->products as $product  ){

                $product->category_id = 1;
                $product->save();

            }

            $category->delete();

            return back();

        }else{

            $message = "The UNCATEGORIZED category cant be deleted";


            return view('admin.pages.message', compact('message') );
        }

        

    }












}
