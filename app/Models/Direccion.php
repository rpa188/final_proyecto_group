<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direccion';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'celular',
        'direccion',
        'numero',
        'id_ubigeo',
        'zip_code',
        'descripcion_adicional',
        'id_user'
    ];

    public function ubigeo()
    {
        return $this->belongsTo(Ubigeo::class, 'id_ubigeo', 'id');
    }
}
