<?php

namespace App\Http\Controllers;

use App\Http\Requests\DireccionFormRequest;
use App\Models\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
    public function update(DireccionFormRequest $request, $direccion_id)
    {
        $data = $request->validated();
        $data['id_ubigeo'] = $data['departamento'] . $data['provincia'] . $data['distrito'];
        unset($data['departamento']);
        unset($data['provincia']);
        unset($data['distrito']);
        //return response()->json($data);

        if($direccion_id == "0"){
            $data['id_user'] = Auth::id();
            Direccion::create($data);
        } else {
            $direccion = Direccion::find($direccion_id);
            $direccion->update($data);
        }

        return redirect('/perfil#shipping-address');
    }
}
