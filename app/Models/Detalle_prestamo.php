<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_prestamo extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table="detalle_prestamo";
    protected $primaryKey="id";
    public $timestamps=false;
   
    protected $fillable=
    [
        'id',
        'id_libro',
        'ISBN',
        'fecha_prestamo',
        'describe_estado',
        'folio'
        
    ];
}
