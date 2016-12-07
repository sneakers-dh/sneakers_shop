<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class SneakersController extends Controller
{
  public function index(Request $request) {

    $products = Product::name($request->get('name'))->visibles()->orderBy('id', 'DESC')->paginate(10);

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
    $products = Product::visibles()->where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
    return view('publicaciones', compact('products'));
  }
  public function zapatillas() {
    $products = Product::visibles()->where('category_id', 1)->paginate(10);
    return view('products/index', compact('products'));
  }
  public function zapatos() {
    $products = Product::visibles()->where('category_id', 2)->paginate(10);
    return view('products/index', compact('products'));
  }
  public function sandalias() {
    $products = Product::visibles()->where('category_id', 4)->paginate(10);
    return view('products/index', compact('products'));
  }
  public function ojotas() {
    $products = Product::visibles()->where('category_id', 3)->paginate(10);
    return view('products/index', compact('products'));
  }
  public function botas() {
    $products = Product::visibles()->where('category_id', 5)->paginate(10);
    return view('products/index', compact('products'));
  }
  public function botines() {
    $products = Product::visibles()->where('category_id', 6)->paginate(10);
    return view('products/index', compact('products'));
  }

  // BUSQUEDA POR SUBCATEGORIA - ZAPATILLAS
  public function zapatillaGoma() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 1],
      ['materials.value', 'Goma'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatillaGamuza() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 1],
      ['materials.value', 'Gamuza'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatillaCuero() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 1],
      ['materials.value', 'Cuero'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatillaCuerina() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 1],
      ['materials.value', 'Cuerina'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatillaAlgodon() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 1],
      ['materials.value', 'Algodon'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatillaLona() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 1],
      ['materials.value', 'Lona'],
    ])
    ->paginate(10);
    return view('products/index', compact('products'));
  }
  public function zapatillaMalla() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 1],
      ['materials.value', 'Malla'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }

  // BUSQUEDA POR MATERIALES - ZAPATOS
  public function zapatoGoma() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 2],
      ['materials.value', 'Goma'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatoGamuza() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 2],
      ['materials.value', 'Gamuza'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatoCuero() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 2],
      ['materials.value', 'Cuero'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatoCuerina() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 2],
      ['materials.value', 'Cuerina'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatoAlgodon() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 2],
      ['materials.value', 'Algodon'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function zapatoLona() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 2],
      ['materials.value', 'Lona'],
    ])
    ->paginate(10);
    return view('products/index', compact('products'));
  }
  public function zapatoMalla() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 2],
      ['materials.value', 'Malla'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }

  // BUSQUEDA POR MATERIALES - OJOTAS
  public function ojotaGoma() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 3],
      ['materials.value', 'Goma'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function ojotaGamuza() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 3],
      ['materials.value', 'Gamuza'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function ojotaCuero() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 3],
      ['materials.value', 'Cuero'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function ojotaCuerina() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 3],
      ['materials.value', 'Cuerina'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function ojotaAlgodon() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 3],
      ['materials.value', 'Algodon'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function ojotaLona() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 3],
      ['materials.value', 'Lona'],
    ])
    ->paginate(10);
    return view('products/index', compact('products'));
  }
  public function ojotaMalla() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 3],
      ['materials.value', 'Malla'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }

  // BUSQUEDA POR MATERIALES - SANDALIAS
  public function sandaliaGoma() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 4],
      ['materials.value', 'Goma'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function sandaliaGamuza() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 4],
      ['materials.value', 'Gamuza'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function sandaliaCuero() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 4],
      ['materials.value', 'Cuero'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function sandaliaCuerina() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 4],
      ['materials.value', 'Cuerina'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function sandaliaAlgodon() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 4],
      ['materials.value', 'Algodon'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function sandaliaLona() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 4],
      ['materials.value', 'Lona'],
    ])
    ->paginate(10);
    return view('products/index', compact('products'));
  }
  public function sandaliaMalla() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 4],
      ['materials.value', 'Malla'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }

  // BUSQUEDA POR MATERIALES - BOTAS
  public function botaGoma() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 5],
      ['materials.value', 'Goma'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botaGamuza() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 5],
      ['materials.value', 'Gamuza'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botaCuero() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 5],
      ['materials.value', 'Cuero'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botaCuerina() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 5],
      ['materials.value', 'Cuerina'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botaAlgodon() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 5],
      ['materials.value', 'Algodon'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botaLona() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 5],
      ['materials.value', 'Lona'],
    ])
    ->paginate(10);
    return view('products/index', compact('products'));
  }
  public function botaMalla() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 5],
      ['materials.value', 'Malla'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }

  // BUSQUEDA POR MATERIALES - BOTINES
  public function botinGoma() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 6],
      ['materials.value', 'Goma'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botinGamuza() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 6],
      ['materials.value', 'Gamuza'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botinCuero() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 6],
      ['materials.value', 'Cuero'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botinCuerina() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 6],
      ['materials.value', 'Cuerina'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botinAlgodon() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 6],
      ['materials.value', 'Algodon'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
  public function botinLona() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 6],
      ['materials.value', 'Lona'],
    ])
    ->paginate(10);
    return view('products/index', compact('products'));
  }
  public function botinMalla() {
    $products = Product::visibles()
    ->join ('material_product', 'products.id', '=', 'material_product.product_id')
    ->join ('materials', 'material_product.material_id', '=', 'materials.id')
    ->where([
      ['category_id', 6],
      ['materials.value', 'Malla'],
    ])
    ->paginate(10);

    return view('products/index', compact('products'));
  }
}
