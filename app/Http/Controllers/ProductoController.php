<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoFormRequest;
use Intervention\Image\Facades\Image;

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
        $name = $request->file('imagen')->getClientOriginalName();
        $path = $request->file('imagen')->storeAs('public/images', $request->get('SKU') . '.jpg');
        $producto = Producto::create($data);

        return redirect('/productos')->with('message', 'Successfully added');
    }

    public function edit($product_id)
    {
        $producto = Producto::find($product_id);
        return view('producto.edit', compact('producto'));
    }

    public function update(ProductoFormRequest $request, $product_id)
    {
        $data = $request->validated();
        $producto = Producto::where('id', $product_id)->update([
            'id_categoria' => $data['id_categoria'],
            'nombre' => $data['nombre'],
            'SKU' => $data['SKU'],
            'descripcion' => $data['descripcion'],
            'precio' => $data['precio']
        ]);
        return redirect('/productos')->with('message', 'Producto Actualizado Exitosamente');
    }
}
