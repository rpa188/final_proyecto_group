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

        /*if ($request->hasFile('imagen')) {
            $image      = $request->file('imagen');
            //$fileName   = time() . '.' . $image->getClientOriginalExtension();
            $fileName = $request->get('SKU');

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put('images/'.$fileName, $img, 'public');
        }*/

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
