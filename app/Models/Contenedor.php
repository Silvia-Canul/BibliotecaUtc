<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenedor extends Model
{
    use HasFactory;

    protected $table = 'contenedores';

    protected $primaryKey = 'id_contenedor';
     public $timestamps = false;

     public $fillable=[
     	
     	'nom_contenedor',
     	'descripcion',
     	

     ];
}
