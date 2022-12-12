<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaHist extends Model
{
    use HasFactory;

    protected $table = 'categoria_hist';

    protected $fillable = [
        'id_categoria',
        'nombre',
        'descripcion',
        'status',
        'modifier_user'
    ];

    public $timestamps = false;
}
