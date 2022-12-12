<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $fillable = [
        'id_categoria',
        'id_marca',
        'nombre',
        'SKU',
        'descripcion',
        'precio',
        'status',
        'creator_user'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca', 'id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'id_producto', 'id');
    }
}
