<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class SneakersController extends Controller
{
  public function index() {
    $zapatillas = Product::visibles()->where('category_id', 1)->limit(5)->orderBy('id','desc')->get();
    $zapatos = Product::visibles()->where('category_id', 2)->limit(5)->orderBy('id','desc')->get();
    $ojotas = Product::visibles()->where('category_id', 3)->limit(5)->orderBy('id','desc')->get();
    $sandalias = Product::visibles()->where('category_id', 4)->limit(5)->orderBy('id','desc')->get();
    $botas = Product::visibles()->where('category_id', 5)->limit(5)->orderBy('id','desc')->get();
    $botines = Product::visibles()->where('category_id', 6)->limit(5)->orderBy('id','desc')->get();
    return view('index', compact('zapatillas', 'zapatos', 'sandalias', 'ojotas', 'botas', 'botines'));
  }

  public function help() {
    return view('faq');
  }

  public function publicaciones(){
    $products = Product::visibles()->where('user_id', Auth::id())->get();
    return view('publicaciones', compact('products'));
  }

  public function zapatillas() {
    $products = Product::visibles()->where('category_id', 1)->get();
    return view('products/index', compact('products'));
  }

  public function zapatos() {
    $products = Product::visibles()->where('category_id', 2)->get();
    return view('products/index', compact('products'));
  }

  public function sandalias() {
    $products = Product::visibles()->where('category_id', 4)->get();
    return view('products/index', compact('products'));
  }

  public function ojotas() {
    $products = Product::visibles()->where('category_id', 3)->get();
    return view('products/index', compact('products'));
  }

  public function botas() {
    $products = Product::visibles()->where('category_id', 5)->get();
    return view('products/index', compact('products'));
  }

  public function botines() {
    $products = Product::visibles()->where('category_id', 6)->get();
    return view('products/index', compact('products'));
  }
}
