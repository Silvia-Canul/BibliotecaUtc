<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table ='usuarios';
        protected $primaryKey ='id_usuario';
        protected $with=['denominacion'];
        public $timestamps = false;
    

        public $fillable=[
    
            'nombres',
            'apellido_p',
            'apellido_m',
            'curp',
            'direccion',
            'correo',
            'telefono',
            'usser',
            'password',
            'activo',
            'id_rol',
        ];

         public function denominacion(){
        return $this->belongsTo(Rol::class,'id_rol','id_rol');
    }
}
