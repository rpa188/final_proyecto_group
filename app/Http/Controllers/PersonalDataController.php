<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalDataFormRequest;
use App\Models\PersonalData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalDataController extends Controller
{
    public function index()
    {
        $personal_data = PersonalData::with(['usuario'])->get();
        return view('usuario.index', compact('personal_data'));
    }

    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(PersonalData $personalData)
    {
        //
    }

    public function edit($personaldata_id)
    {
        $data = [
            'personaldata' => PersonalData::find($personaldata_id),
            'tipo_documento' => [
                "1" => "DNI",
                "2" => "LE"
            ]
        ];
        return view('usuario.edit', compact('data'));
    }

    public function update(PersonalDataFormRequest $request, $personaldata_id, $pathid)
    {
        $data = $request->validated();
        if($personaldata_id == "0"){
            $data['id_user'] = Auth::id();
            $data['creator_user'] = Auth::id();
            PersonalData::create($data);
        } else {
            $personal_data = PersonalData::find($personaldata_id);
            $personal_data->update($data);
        }
        $redirect_path = '/perfil';
        if($pathid == '2'){
            $redirect_path = '/usuarios';
        }
        return redirect($redirect_path);
    }

    public function destroy(PersonalData $personalData)
    {
        //
    }
}
