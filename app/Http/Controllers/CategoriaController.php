<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaFormRequest;
use App\Models\Categoria;
use App\Models\CategoriaHist;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(CategoriaFormRequest $request)
    {
        $data = $request->validated();
        $data['creator_user'] = Auth::id();
        $categoria = Categoria::create($data);

        $historyData = [
            'id_categoria' => $categoria->id,
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'status' => 1,
            'modifier_user' => Auth::id()
        ];
        CategoriaHist::create($historyData);

        return redirect('/categorias')->with('message', 'Categoría creada exitosamente');
    }

    public function edit($categoria_id)
    {
        $categoria = Categoria::find($categoria_id);
        return view('categoria.edit', compact('categoria'));
    }

    public function update(CategoriaFormRequest $request,$categoria_id)
    {
        $data = $request->validated();

        Categoria::where('id', $categoria_id)->update($data);

        $historyData = [
            'id_categoria' => $categoria_id,
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'status' => 1,
            'modifier_user' => Auth::id()
        ];
        CategoriaHist::create($historyData);

        return redirect('/categorias')->with('message', 'Categoría Actualizada Exitosamente');
    }

    public function destroy($categoria_id)
    {
        $categoria = Categoria::find($categoria_id);

        $historyData = [
            'id_categoria' => $categoria_id,
            'nombre' => $categoria['nombre'],
            'descripcion' => $categoria['descripcion'],
            'status' => 0,
            'modifier_user' => Auth::id()
        ];
        $categoria->delete();
        CategoriaHist::create($historyData);
        return redirect('/categorias')->with('message', 'Categoría Borrada Exitosamente');
    }

    public function detail($category_id){
        $data = [

        ];
        return view('categoria.detail', compact('data'));
    }
}
