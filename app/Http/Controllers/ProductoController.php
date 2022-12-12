<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoFormRequest;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(ProductoFormRequest $request)
    {
        $data = $request->validated();

        $producto = Producto::create($data);

        /*$producto = new Producto([
          'id_categoria' => $request->get('id_categoria'),
          'nombre' => $request->get('nombre'),
          'SKU' => $request->get('SKU'),
          'descripcion' => $request->get('descripcion'),
          'precio' => $request->get('precio')
        ]);
        $producto->save();*/
        return redirect('/productos')->with('message', 'Successfully added');
    }
}
