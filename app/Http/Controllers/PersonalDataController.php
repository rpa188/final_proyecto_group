<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalDataFormRequest;
use App\Http\Requests\UsuarioFormRequest;
use App\Http\Requests\UsuarioPassFormRequest;
use App\Models\PersonalData;
use App\Models\TipoDocumento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonalDataController extends Controller
{
    public function index()
    {
        $user_list = User::with(['personal_data', 'rol'])->get();
        return view('usuario.index', compact('user_list'));
    }

    public function create()
    {
        $data = [
            'tipo_documento' => TipoDocumento::all()
        ];
        return view('usuario.create', compact('data'));
    }

    public function store(UsuarioPassFormRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        PersonalData::create([
            'id_user' => $user->id,
            'nombre' => $data['nombre'],
            'ape_paterno' => $data['ape_paterno'],
            'ape_materno' => $data['ape_materno'],
            'id_tipo_documento' => $data['id_tipo_documento'],
            'numero_documento' => $data['numero_documento'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'celular' => $data['celular'],
            'creator_user' => Auth::id()
        ]);

        $user->assignRole($data['role']);

        return redirect('/usuarios')->with('message', 'Usuario creado exitosamente');
    }

    public function show(PersonalData $personalData)
    {
        //
    }

    public function edit($user_id)
    {
        $data = [
            'usuario' => User::with('personal_data')->find($user_id),
            'tipo_documento' => TipoDocumento::all()
        ];
        return view('usuario.edit', compact('data'));
    }

    public function update(UsuarioFormRequest $request, $usuario_id){
        $data = $request->validated();
        $personal_data = PersonalData::where('id_user', $usuario_id)->get();

        $params_personal_data = [
            'id_user' => $usuario_id,
            'nombre' => $data['nombre'],
            'ape_paterno' => $data['ape_paterno'],
            'ape_materno' => $data['ape_materno'],
            'id_tipo_documento' => $data['id_tipo_documento'],
            'numero_documento' => $data['numero_documento'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'celular' => $data['celular'],
            'creator_user' => Auth::id()
        ];

        if(sizeof($personal_data) > 0){
            $personal_data = PersonalData::find($personal_data[0]->id);
            $personal_data->update($params_personal_data);
        } else {
            PersonalData::create($params_personal_data);
        }
        $user = User::find($usuario_id);
        $dataUserUpdated = [
            'name' => $data['nombre'],
            'email' => $data['email']
        ];
        if($data['password']!==""){
            $dataUserUpdated['password'] = Hash::make($data['password']);
        }
        $user->update($dataUserUpdated);

        $user->removeRole('cliente');
        $user->removeRole('vendedor');
        $user->removeRole('admin');
        $user->assignRole($data['role']);

        return redirect('/usuarios')->with('message', 'Usuario actualizado exitosamente');
    }

    public function update_personaldata(PersonalDataFormRequest $request, $personaldata_id, $pathid)
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
        return redirect($redirect_path)->with('message', 'Usuario Actualizado Exitosamente');
    }

    public function destroy($user_id)
    {
        User::find($user_id)->delete();
        PersonalData::where('id_user', $user_id)->delete();

        return redirect('/usuarios')->with('message', 'Usuario eliminado exitosamente');
    }
}
