<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
   //
   use HasFactory;
   protected $table='materias';
   protected $primaryKey='id_materia';

   public $timestamps=false;
   public $incrementing=false;

   public $fillable=[
   'id_materia',
   'nom_materia',
   'activo'
  
   ];
}
