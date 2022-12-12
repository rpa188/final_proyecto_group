<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoFormRequest;
use App\Models\Cart;
use App\Models\DetallePedido;
use App\Models\Direccion;
use App\Models\Movimiento;
use App\Models\Pedido;
use App\Models\TipoComprobante;
use App\Models\TipoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::where('id_user', Auth::id())->with(['direccion', 'tipo_comprobante', 'tipo_pago'])->get();
        return view('pedido.index', compact('pedidos'));
    }

    public function detail($pedido_id)
    {
        $pedido = Pedido::find($pedido_id)->with(['direccion', 'tipo_comprobante', 'tipo_pago'])->first();
        $data = [
            'usuario' => Auth::user(),
            'itemsCart' => DetallePedido::where('id_pedido', $pedido_id)->with(['producto'])->get(),
            'subtotal' => 0.0,
            'direccion' => $pedido->direccion,
            'tipoComprobante' => TipoComprobante::all(),
            'tipoPago' => TipoPago::all()
        ];
        return view('pedido.detail', compact('data'));
    }

    public function create()
    {
        $carrito = Cart::where('id_user', Auth::id())->with(['producto'])->get();
        $subtotal = 0.0;
        foreach($carrito as $item){
            $subtotal = $subtotal + ($item['producto']->precio * $item->cantidad);
        }
        $direccion = Direccion::where('id_user', Auth::id())->get();
        $direccionObj = new stdClass;
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
            'usuario' => Auth::user(),
            'itemsCart' => $carrito,
            'subtotal' => $subtotal,
            'direccion' => $direccionObj,
            'tipoComprobante' => TipoComprobante::all(),
            'tipoPago' => TipoPago::all(),
        ];
        return view('pedido.create', compact('data'));
    }

    public function store(PedidoFormRequest $request)
    {
        $data = $request->validated();
        //actualizando direccion
        $direccionData = [
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'celular' => $data['celular'],
            'direccion' => $data['direccion'],
            'numero' => $data['numero'],
            'id_ubigeo' => $data['departamento'] . $data['provincia'] . $data['distrito'],
            'zip_code' => $data['zip_code'],
            'descripcion_adicional' => $data['descripcion_adicional'],
            'id_user' => Auth::id()
        ];
        $direccionPrevia = Direccion::where('id_user', Auth::id())->get();
        if(sizeof($direccionPrevia) == 0){
            $direccion = Direccion::create($direccionData);
        } else {
            $direccion = Direccion::find($direccionPrevia[0]->id);
            $direccion->update($direccionData);
        }
        //preparando orden
        $carrito = Cart::where('id_user', Auth::id())->with(['producto'])->get();
        $subtotal = 0.0;
        foreach($carrito as $item){
            $subtotal = $subtotal + ($item['producto']->precio * $item->cantidad);
        }
        $orderData = [
            'id_user' => Auth::id(),
            'id_direccion' => $direccion->id,
            'id_tipo_comprobante' => $data['id_tipo_comprobante'],
            'id_tipo_pago' => $data['id_tipo_pago'],
            'descripcion_adicional' => '',
            'precio' => $subtotal,
            'id_status_pedido' => '1'
        ];
        $pedidoObj = Pedido::create($orderData);
        foreach($carrito as $itemCarrito){
            $pedidoDetObj = [
                'id_pedido' => $pedidoObj->id,
                'id_producto' => $itemCarrito->id_producto,
                'cantidad' => $itemCarrito->cantidad
            ];

            $movimientoObj = [
                'id_producto' => $itemCarrito->id_producto,
                'id_destino' => 1,
                'cantidad' => (($itemCarrito->cantidad) * (-1)),
                'creator_user' => Auth::id()
            ];

            DetallePedido::create($pedidoDetObj);
            Movimiento::create($movimientoObj);

            $itemCarrito->delete();
        }

        return redirect('/pedidos')->with('message', 'Order creada exitosamente');
    }

    public function edit(Request $request)
    {
        //
    }

    public function update(Request $request, int $cart_id)
    {
        //
    }

    public function destroy(int $cart_id)
    {
        //
    }
}
