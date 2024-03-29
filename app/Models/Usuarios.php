<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table="usuarios";
    protected $primaryKey="id_usuario";
    public $timestamps=false;
    protected $with=['roles'];
    protected $fillable=
    [
        'id_usuario',
        'id_rol',
        'nombre',
        'apellido_p',
        'apellido_m',
        'usuario',
        'password',
        'imagen'
    ];

    public function roles(){
        return $this-> belongsTo(roles::class,'id_rol');
    }
}
