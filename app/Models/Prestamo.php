<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table="prestamos";
    protected $primaryKey="id_prestamo";
    public $timestamps=false;
   
    protected $fillable=
    [
        'id_prestamo',
        'id_libro',
        'ISBN',
        'fecha_prestamo',
        'describe_estado',
        'folio'
        
    ];
}
