<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UbigeoController extends Controller
{
    public function index()
    {
        //
    }

    public function departamento(){
        $ubigeo = DB::table('ubigeo')
            ->select(DB::raw('substr(id, 1, 2) as id_departamento, dpto'))
            ->distinct()
            ->get();
        return response()->json($ubigeo);
    }

    public function provincia($id_departamento){
        $ubigeo = DB::table('ubigeo')
            ->select(DB::raw('substr(id, 3, 2) as id_provincia, prov'))
            ->where(DB::raw('substr(id, 1, 2)'), '=', $id_departamento)
            ->distinct()
            ->get();
        return response()->json($ubigeo);
    }

    public function distrito($id_departamento, $id_provincia){
        $ubigeo = DB::table('ubigeo')
            ->select(DB::raw('substr(id, 5, 2) as id_distrito, distrito'))
            ->where(DB::raw('substr(id, 1, 2)'), '=', $id_departamento)
            ->where(DB::raw('substr(id, 3, 2)'), '=', $id_provincia)
            ->distinct()
            ->get();
        return response()->json($ubigeo);
    }
}
