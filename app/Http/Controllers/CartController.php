<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        if(!is_array(Session::get('carrito'))){
            $carrito = Cart::where('id_user', Auth::id())->with(['producto'])->get();
            Session::put('carrito', $carrito);
        }
        return response()->json(Session::get('carrito'));
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $cartItems = Session::get('carrito');
        $msg = "Producto añadido exitosamente";

        if(!is_array(Session::get('carrito'))) {
            $cartItems = Cart::where('id_user', Auth::id())->with(['producto'])->get();
        }
        $cartId = -1;
        foreach($cartItems as $item){
            if($item->id_producto == $request->id_producto){
                $cartId = $item->id;
                break;
            }
        }
        if($cartId != -1){ //actualizar item
            $itemCarrito = Cart::find($cartId);
            $itemCarrito->cantidad = $itemCarrito->cantidad + $request->cantidad;
            $itemCarrito->save();
            $msg = "Producto actualizado exitosamente";
        } else { //crear item
            $data = [
                'id_user' => Auth::id(),
                'id_producto' => $request->id_producto,
                'cantidad' => $request->cantidad
            ];
            $item = Cart::create($data);
        }
        $cartItems = Cart::where('id_user', Auth::id())->with(['producto'])->get();
        Session::put('carrito', $cartItems);

        return response()->json([
            "status" => "succeed",
            "msg" => $msg
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $cart_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, int $cart_id)
    {
        //actualizar cantidad
        $itemCarrito = Cart::find($cart_id);
        $itemCarrito->cantidad = $request->cantidad;
        $itemCarrito->save();

        $carrito = Cart::where('id_user', Auth::id())->with(['producto'])->get();
        Session::put('carrito', $carrito);

        return response()->json([
            "status" => "succeed",
            "msg" => "Elemento actualizado exitosamente"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $cart_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $cart_id)
    {
        $itemCarrito = Cart::find($cart_id);
        $itemCarrito->delete();

        return response()->json([
            "status" => "succeed",
            "msg" => "Elemento eliminado exitosamente"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function clean()
    {
        $carrito = Cart::where('id_user', Auth::id());
        $carrito->delete();

        return response()->json([
            "status" => "succeed",
            "msg" => "Carrito limpio!"
        ]);
    }
}
