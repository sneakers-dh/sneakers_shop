<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $products = Product::name($request->get('name'))->visibles()->orderBy('id', 'DESC')->paginate(10);

      $zapatillas = Product::visibles()->where('category_id', 1)->limit(5)->orderBy('id','desc')->get();
      $zapatos = Product::visibles()->where('category_id', 2)->limit(5)->orderBy('id','desc')->get();
      $ojotas = Product::visibles()->where('category_id', 3)->limit(5)->orderBy('id','desc')->get();
      $sandalias = Product::visibles()->where('category_id', 4)->limit(5)->orderBy('id','desc')->get();
      $botas = Product::visibles()->where('category_id', 5)->limit(5)->orderBy('id','desc')->get();
      $botines = Product::visibles()->where('category_id', 6)->limit(5)->orderBy('id','desc')->get();
      return view('home', compact('zapatillas', 'zapatos', 'sandalias', 'ojotas', 'botas', 'botines'));
    }
}
