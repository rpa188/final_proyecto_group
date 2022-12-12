<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class WelcomeController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['categoria', 'marca'])->get();
        return view('welcome', compact('productos'));
    }
}
