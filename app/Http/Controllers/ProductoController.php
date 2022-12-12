<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductoFormRequest;
use Intervention\Image\Facades\Image;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['categoria', 'marca'])->get();
        return view('producto.index', compact('productos'));
    }

    public function create()
    {
        $data = [
            'marca' => Marca::all(),
            'categoria' => Categoria::all()
        ];
        return view('producto.create', compact('data'));
    }

    public function store(ProductoFormRequest $request)
    {
        $data = $request->validated();
        $data['creator_user'] = Auth::id();
        $name = $request->file('imagen')->getClientOriginalName();
        $path = $request->file('imagen')->storeAs('public/images', $request->get('SKU') . '.jpg');
        $producto = Producto::create($data);

        return redirect('/productos')->with('message', 'Producto creado exitosamente');
    }

    public function edit($product_id)
    {
        $data = [
            'marca' => Marca::all(),
            'categoria' => Categoria::all(),
            'producto' => Producto::with(['categoria', 'marca'])->find($product_id)
        ];
        return view('producto.edit', compact('data'));
    }

    public function update(ProductoFormRequest $request, $product_id)
    {
        $data = $request->validated();
        if(!empty($request->imagen)){
            $path = $request->file('imagen')->storeAs('public/images', $request->get('SKU') . '.jpg');
        }
        $modifiedData = [
            'id_categoria' => $data['id_categoria'],
            'id_marca' => $data['id_marca'],
            'nombre' => $data['nombre'],
            'SKU' => $data['SKU'],
            'descripcion' => $data['descripcion']
        ];
        $user = User::find(Auth::id());
        if ($user->can('create-users')) {
            $modifiedData['precio'] = $data['precio'];
        }
        $producto = Producto::where('id', $product_id)->update($modifiedData);
        return redirect('/productos')->with('message', 'Producto Actualizado Exitosamente');
    }

    public function destroy($product_id){
        $producto = Producto::find($product_id)->delete();
        return redirect('/productos')->with('message', 'Producto Borrado Exitosamente');
    }
}
