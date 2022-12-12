<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\ProductoHist;
use App\Models\Movimiento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductoFormRequest;
use Intervention\Image\Facades\Image;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['categoria', 'marca', 'movimiento'])->get();
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

        $historyData = [
            'id_producto' => $producto->id,
            'id_categoria' => $data['id_categoria'],
            'id_marca' => $data['id_marca'],
            'nombre' => $data['nombre'],
            'SKU' => $data['SKU'],
            'descripcion' => $data['descripcion'],
            'precio' => $data['precio'],
            'status' => 1,
            'modifier_user' => Auth::id()
        ];
        ProductoHist::create($historyData);

        Movimiento::create([
            'id_producto' => $producto->id,
            'id_destino' => 1,
            'cantidad' => $data['stock'],
            'creator_user' => Auth::id()
        ]);

        return redirect('/productos')->with('message', 'Producto creado exitosamente');
    }

    public function edit($product_id)
    {
        $data = [
            'marca' => Marca::all(),
            'categoria' => Categoria::all(),
            'producto' => Producto::with(['categoria', 'marca', 'movimiento'])->find($product_id)
        ];
        return view('producto.edit', compact('data'));
    }

    public function update(ProductoFormRequest $request, $product_id)
    {
        $data = $request->validated();
        if(!empty($request->file('imagen'))){
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

        $historyData = [
            'id_producto' => $product_id,
            'id_categoria' => $data['id_categoria'],
            'id_marca' => $data['id_marca'],
            'nombre' => $data['nombre'],
            'SKU' => $data['SKU'],
            'descripcion' => $data['descripcion'],
            'precio' => $data['precio'],
            'status' => 1,
            'modifier_user' => Auth::id()
        ];
        ProductoHist::create($historyData);

        /*$stock = Stock::where('id_producto', $product_id)->get();
        if(sizeof($stock) == 0){
            Stock::create([
                'id_producto' => $product_id,
                'id_sucursal' => 1,
                'stock' => $data['stock'],
                'creator_user' => Auth::id()
            ]);
        } else {
            $stockObj = $stock[0];
            $stockObj->stock = $data['stock'];
            $stockObj->save();
        }*/

        return redirect('/productos')->with('message', 'Producto Actualizado Exitosamente');
    }

    public function destroy($product_id){
        $producto = Producto::find($product_id);

        $historyData = [
            'id_producto' => $product_id,
            'id_categoria' => $producto['id_categoria'],
            'id_marca' => $producto['id_marca'],
            'nombre' => $producto['nombre'],
            'SKU' => $producto['SKU'],
            'descripcion' => $producto['descripcion'],
            'precio' => $producto['precio'],
            'status' => 0,
            'modifier_user' => Auth::id()
        ];
        ProductoHist::create($historyData);

        $producto->delete();
        return redirect('/productos')->with('message', 'Producto Borrado Exitosamente');
    }

    public function detail($product_id){
        $data = [
            'producto' => Producto::with(['categoria', 'marca', 'movimiento'])->find($product_id),
            'recomendados' => Producto::all()->random(5) //where('id','!=',$product_id)->inRandomOrder()->take(5)
            ];
        return view('producto.detail', compact('data'));
    }
}
