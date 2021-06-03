<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLector extends Model
{
    use HasFactory;

    protected $table='tipo_lector';
    protected $primarykey='id_tipo';
    public $timestamps=false;

    public $fillable=[
        'tipo',
        'activo',
    ];
}
