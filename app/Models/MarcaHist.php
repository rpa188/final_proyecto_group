<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaHist extends Model
{
    use HasFactory;

    protected $table = 'marca_hist';

    protected $fillable = [
        'id_marca',
        'nombre',
        'descripcion',
        'status',
        'modifier_user'
    ];

    public $timestamps = false;
}
