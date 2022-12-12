<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalDataFormRequest;
use App\Models\PersonalData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalData $personalData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalData $personalData)
    {
        //
    }

    public function update(PersonalDataFormRequest $request, $personaldata_id)
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

        return redirect('/perfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalData  $personalData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalData $personalData)
    {
        //
    }
}
