<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class SneakersController extends Controller
{
  public function index() {
    return view('index');
  }

  public function help() {
    return view('faq');
  }

  public function publicaciones(){
    $products = Product::visibles()->where('user_id', Auth::id())->get();
    return view('publicaciones', compact('products'));
  }

  public function zapatillas() {
    $products = Product::visibles()->where('name','LIKE', '%zapatillas%')->get();
    return view('products/index', compact('products'));
  }

  public function zapatos() {
    $products = Product::visibles()->where('name','LIKE', '%zapatos%')->get();
    return view('products/index', compact('products'));
  }

  public function sandalias() {
    $products = Product::visibles()->where('name','LIKE', '%sandalias%')->get();
    return view('products/index', compact('products'));
  }

  public function ojotas() {
    $products = Product::visibles()->where('name','LIKE', '%ojotas%')->get();
    return view('products/index', compact('products'));
  }

  public function botas() {
    $products = Product::visibles()->where('name','LIKE', '%botas%')->get();
    return view('products/index', compact('products'));
  }

  public function botines() {
    $products = Product::visibles()->where('name','LIKE', '%botines%')->get();
    return view('products/index', compact('products'));
  }
}
