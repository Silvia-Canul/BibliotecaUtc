<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registros;

class Registros extends Model
{
    use HasFactory;
    protected $table="registros";
    protected $primaryKey="id_registro";
    public $timestamps=true;
   
    protected $fillable=
    [
        'id_registro',
        'identificador',
        'nombre',
        'actividad'
        
    ];
}
