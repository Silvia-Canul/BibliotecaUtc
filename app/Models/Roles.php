<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table="tipos_usuarios";
    protected $primaryKey="id_tipo";
    public $timestamps=false;
   
    protected $fillable=
    [
        'id_tipo',
        'nombre_tipo',
        'descripcion',
        'activo'
        
    ];
}
