<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedido extends Model
{
    use HasFactory;

    protected $table = 'status_pedido';

    protected $fillable = [
        'nombre',
        'descripcion',
        'creator_user'
    ];
}
