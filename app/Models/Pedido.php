<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';

    protected $fillable = [
        'id_user',
        'id_direccion',
        'id_tipo_comprobante',
        'id_tipo_pago',
        'descripcion_adicional',
        'precio',
        'id_status_pedido'
    ];

    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'id_direccion', 'id');
    }

    public function tipo_comprobante()
    {
        return $this->belongsTo(TipoComprobante::class, 'id_tipo_comprobante', 'id');
    }

    public function tipo_pago()
    {
        return $this->belongsTo(TipoPago::class, 'id_tipo_pago', 'id');
    }

    public function status_pedido()
    {
        return $this->belongsTo(StatusPedido::class, 'id_status_pedido', 'id');
    }

    public function user_cliente()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
