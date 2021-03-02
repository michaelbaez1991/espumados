<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $productos = Producto::all();
        // return view('producto.index', compact('productos'));

        $products = Product::all()->toArray();
        return array_reverse($products); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("producto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $producto = new Producto($request->input());
        // $producto->saveOrFail();

        // return redirect('/productos');

        $product = new Product($request->input());
        $product->save();

        return response()->json('Product created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $producto = Producto::find($id);
        // return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $producto = Producto::find($id);
        // $producto->fill(request()->input())->save();
        // return redirect('/productos');

        $product = Product::find($id);
        $product->update($request->all());

        return response()->json('Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $producto = Producto::find($id);        
        // $producto->delete();

        // return redirect('/productos');

        $product = Product::find($id);
        $product->delete();

        return response()->json('Product deleted!');
    }
}
