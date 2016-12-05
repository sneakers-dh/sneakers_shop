<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Material;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::visibles()->orderBy('id', 'DESC')->get();
      $products = Product::paginate(10);
      return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      $materials = Material::all();
      return view('products.create', compact('categories', 'materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = \Auth::user()->products()->create($request->all());
      $product->materials()->sync($request->input('materials'));
      return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      $categories = Category::all();
      $materials = Material::all();
      return view('products.edit', compact('product', 'categories', 'materials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $product->update($request->all());
      $product->materials()->sync($request->input('materials'));
      return redirect('publicaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $product->visible = 0;
      $product->save();

      return redirect('publicaciones');
    }

    public function images(Request $request, $id)
    {
      //guardo el archivo
      $product = Product::find($id);
      $file = $request->file('file');
      $ext = $file->extension();
      $name = uniqid();
      $file->storeAs('images/products-'.$product->id, $name.'.'.$ext);

      //persiste en base
      $image = new \App\Image(['src' => 'images/products-'.$product->id.'/'.$name.'.'.$ext]);
      $product->images()->save($image);
    }
}
