<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoHist extends Model
{
    use HasFactory;

    protected $table = 'producto_hist';

    protected $fillable = [
        'id_producto',
        'id_categoria',
        'id_marca',
        'nombre',
        'SKU',
        'descripcion',
        'precio',
        'status',
        'modifier_user'
    ];

    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca', 'id');
    }
}
