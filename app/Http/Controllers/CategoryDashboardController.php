<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    Category,
    Product
};


class CategoryDashboardController extends Controller
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

        return view('categories.dashboard.add' );

    }
    public function store(Request $request){

        //dd( $request->name );

        $category = Category::create([
            'name' => $request->name
        ]);


        return redirect()->route('dashboard.categories.index', $category->id );

    }

    public function index(){

        $categories = Category::paginate(20);

        return view('categories.dashboard.index', compact('categories') );

    }

    public function show(Category $category){

        return view('categories.dashboard.show', compact('category') );

    }

    public function update(Request $request, Category $category){


        if(  $category->id != 1   ){

            $category->name = $request->name;

            $category->save();
    
    
            return redirect()->route('dashboard.categories.index', $category->id );

        }else{

            $message = "The UNCATEGORIZED category cant be updated";


            return view('admin.pages.message', compact('message') );
        }



    }

    public function edit(Category $category){

        if(  $category->id != 1   ){

            return view('categories.dashboard.edit', compact('category') );

        }else{

            $message = "The UNCATEGORIZED category cant be edited";


            return view('admin.pages.message', compact('message') );
        }

        

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
