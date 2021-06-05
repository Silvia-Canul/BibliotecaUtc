<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table ='tipo_lector';
        protected $primaryKey ='id_tipo';
        public $timestamps = false;
    

        public $fillable=[
    
            'tipo',
            'activo',
            
        ];
}
