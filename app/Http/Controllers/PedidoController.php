<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoFormRequest;
use App\Mail\ClienteMail;
use App\Models\Cart;
use App\Models\DetallePedido;
use App\Models\Direccion;
use App\Models\Movimiento;
use App\Models\Pedido;
use App\Models\StatusPedido;
use App\Models\TipoComprobante;
use App\Models\TipoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use stdClass;

class PedidoController extends Controller
{
    public function index()
    {
        if(Auth::user()->can('maintenance')){
            $pedidos = Pedido::with(['direccion', 'tipo_comprobante', 'tipo_pago', 'user_cliente'])->get();
        } else {
            $pedidos = Pedido::with(['direccion', 'tipo_comprobante', 'tipo_pago', 'user_cliente'])->where('id_user', Auth::id())->get();
        }
        return view('pedido.index', compact('pedidos'));
    }

    public function detail($pedido_id)
    {
        $pedido = Pedido::with(['direccion.ubigeo', 'tipo_comprobante', 'tipo_pago', 'status_pedido'])->get()->find($pedido_id);
        $detallePedido = DetallePedido::with(['producto'])->where('id_pedido', $pedido_id)->get();
        $subtotal = 0.0;
        foreach($detallePedido as $item){
            $subtotal = $subtotal + ($item['producto']->precio * $item->cantidad);
        }
        $data = [
            'usuario' => Auth::user(),
            'itemsCart' => $detallePedido,
            'subtotal' => $subtotal,
            'pedido' => $pedido
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

    public function update(Request $request, int $order_id)
    {
        $id_status_pedido = $request->status;
        $pedido = Pedido::find($order_id);
        $pedido->id_status_pedido = $id_status_pedido;
        $pedido->update();

        $estado_nombre = StatusPedido::find($id_status_pedido)->nombre;
        $subject = 'Pedido Cancelado! Pedido #' . $pedido->id;
        $title = 'Tenemos un problema, ' . $pedido->user_cliente->name;
        if($id_status_pedido == 3){
            $subject = 'Gracias por su compra! Pedido #' . $pedido->id;
            $title = 'Gracias por tu compra, ' . $pedido->user_cliente->name;
        }
        $mailData = [
            'template' => 'pedido',
            'orderObj' => $pedido,
            'subject' => $subject,
            'title' => $title,
            'body' => "Su pedido fue ".$estado_nombre,
            'order_date' => date('d/M/Y', strtotime($pedido->created_at))
        ];

        Mail::to($pedido->user_cliente->email)->send(new ClienteMail($mailData));
        $request->session()->flash('message', 'Pedido '. $estado_nombre .'. Usuario notificado por correo');
    }

    public function destroy(int $cart_id)
    {
        //
    }
}
