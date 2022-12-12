<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\PersonalData;
use Illuminate\Support\Facades\Auth;
use stdClass;

class PerfilController extends Controller
{
    public function index()
    {
        $personal_data = PersonalData::where('id_user', Auth::id())->get();
        $direccion = Direccion::where('id_user', Auth::id())->get();
        $personalDataObj = new stdClass;
        $direccionObj = new stdClass;
        if(sizeof($personal_data) == 0){
            $personalDataObj->{'nombre'} = Auth::user()->name;
        } else {
            $personalDataObj = $personal_data[0];
        }
        if(sizeof($direccion) == 0){
            $usuario = Auth::user();
            $direccionObj->{'nombre'} = $usuario->name;
            $direccionObj->{'email'} = $usuario->email;
        } else {
            $direccionObj = $direccion[0];
            $direccionObj->{'departamento'} = substr($direccionObj->{'id_ubigeo'}, 0, 2);
            $direccionObj->{'provincia'} = substr($direccionObj->{'id_ubigeo'}, 2, 2);
            $direccionObj->{'distrito'} = substr($direccionObj->{'id_ubigeo'}, 4, 2);
        }
        $data = [
            'personal_data' => $personalDataObj,
            'direccion' => $direccionObj,
            'tipoDocumento' => [
                (object) [
                    'id' => 1,
                    'nombre' => 'DNI'
                ],
                (object) [
                    'id' => 2,
                    'nombre' => 'LE'
                ]
            ]
        ];
        return view('perfil.index', compact('data'));
    }
}
