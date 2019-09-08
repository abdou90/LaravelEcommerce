<?php

namespace App\Http\Controllers;
use App\{
    Category,
    User,
    Product
};
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::limit(5)->get();
        $categories = Category::limit(5)->get();

        // dd($categories);
        $admins = User::where('is_admin', true )->limit(5)->get();
        $users = User::where('is_admin', false )->limit(5)->get();

        return view('admin.home', compact('products', 'categories', 'admins', 'users'));
    }
}
