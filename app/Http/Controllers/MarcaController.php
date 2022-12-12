<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarcaFormRequest;
use App\Models\Marca;
use App\Models\MarcaHist;
use Illuminate\Support\Facades\Auth;

class MarcaController extends Controller
{

    public function index()
    {
        $marcas = Marca::all();
        return view('marca.index', compact('marcas'));
    }

    public function create()
    {
        return view('marca.create');
    }

    public function store(MarcaFormRequest $request)
    {
        $data = $request->validated();
        $data['creator_user'] = Auth::id();
        $marca = Marca::create($data);

        $historyData = [
            'id_marca' => $marca->id,
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'status' => 1,
            'modifier_user' => Auth::id()
        ];
        MarcaHist::create($historyData);

        return redirect('/marcas')->with('message', 'Marca creada exitosamente');
    }

    public function edit($marca_id)
    {
        $marca = Marca::find($marca_id);
        return view('marca.edit', compact('marca'));
    }

    public function update(MarcaFormRequest $request,$marca_id)
    {
        $data = $request->validated();

        Marca::where('id', $marca_id)->update($data);

        $historyData = [
            'id_marca' => $marca_id,
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'status' => 1,
            'modifier_user' => Auth::id()
        ];
        MarcaHist::create($historyData);

        return redirect('/marcas')->with('message', 'Marca Actualizada Exitosamente');
    }

    public function destroy($marca_id)
    {
        $marca = Marca::find($marca_id);

        $historyData = [
            'id_marca' => $marca_id,
            'nombre' => $marca['nombre'],
            'descripcion' => $marca['descripcion'],
            'status' => 0,
            'modifier_user' => Auth::id()
        ];
        $marca->delete();
        MarcaHist::create($historyData);
        return redirect('/marcas')->with('message', 'Marca Borrada Exitosamente');
    }

    public function detail($brand_id){
        $data = [

        ];
        return view('marca.detail', compact('data'));
    }
}
