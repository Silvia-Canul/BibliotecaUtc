<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    use HasFactory;
    protected $table ='lectores';
        protected $primaryKey ='id_lector';
        public $with=['tipos'];
        public $timestamps = false;
    

        public $fillable=[
    
            'nombre',
            'apellido_p',
            'apellido_m',
            'correo',
            'grupo',
            'cuatrimestre',
            'activo',
            'id_tipo',

        ];

    public function tipos(){
        return $this->belongsTo(Tipo::class,'id_tipo','id_tipo');
    }
}
