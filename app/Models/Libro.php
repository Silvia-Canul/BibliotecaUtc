<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table ='libros';
        protected $primaryKey ='id_libro';
        public $timestamps = false;
        public $fillable=[
            'ISBN',
            'titulo',
            'id_autor',
            'id_editorial',
            'edicion',
            'id_carrera',
            'paginas',
            'id_clasifidewey',
            'resenia',
            'ubicacion',
            'describe_estado',
            'foto',
            'created_at',
            'updated_at',
            'activo',
             ];
}

