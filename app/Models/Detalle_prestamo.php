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
    public $incrementing=false;

    protected $with=['libros','ejemplares'];
   
    protected $fillable=
    [
        'id',
        'id_folio',
        'id_libro',
        'ISBN',
        'fecha_prestamo',
        'describe_estado',
        'id_ejemplar'
        
        
    ];

    public function libros(){
        return $this-> belongsTo(Libros::class,'id_libro');
    }
    public function ejemplares(){
        return $this-> belongsTo(ejemplares::class,'id_ejemplar');
    }
}
