<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $table = 'movimiento';

    protected $fillable = [
        'id_producto',
        'id_origen',
        'id_destino',
        'id_pedido',
        'cantidad',
        'creator_user'
    ];
}
