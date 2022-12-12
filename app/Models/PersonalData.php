<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;

    protected $table = 'personal_data';

    protected $fillable = [
        'id_user',
        'nombre',
        'ape_paterno',
        'ape_materno',
        'id_tipo_documento',
        'numero_documento',
        'fecha_nacimiento',
        'celular',
        'create_user'
    ];
}
