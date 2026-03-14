<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::limit(10)->orderBy('id', 'desc')->get();

        return view('product.index', [
            'misProductos' => $productList
        ]);
    }

    public function create()
    {
        $categoryList = Category::all();
        return view('product.create', [
            'categoryList' => $categoryList
        ]);
    }

    public function store(Request $request){

        //VALIDACION DE LOS DATOS
        $request->validate([
            'nombre' => 'required|min:5|max:250',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
            'imagen' => 'required|image',
            'categoria' => 'required|exists:categories,id',
        ]);


        //dd($request->all());

        $newProduct = new Product();
        $newProduct->name = $request->get('nombre');
        $newProduct->description = $request->get('descripcion');
        $newProduct->price = $request->get('precio');
        $newProduct->category_id = $request->get('categoria');

        if($request->hasFile('imagen')){
            $ruta = $request->file('imagen')->store('images', 'public');
            $newProduct->image = $ruta;
        }
        $newProduct->save();

        return redirect()->route('product.index');
    }

    public function show(Product $producto)
    {
        return view('product.show', compact('producto'));
    }
    
    public function destroy(Product $producto)
    {
        $producto->delete();
        return redirect()->route('product.index');
    }
}
