<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;
    protected $table="user_login";
    protected $primaryKey="id_userlogin";
    public $timestamps=false;
    protected $with=['denominacion'];
    protected $fillable=
    [
        'id_userlogin',
        'nombres',
        'apellidos',
        'rol_puesto',
        'usuario',
        'password',
        'activo',
        'id_tipo'
    ];

    public function denominacion(){
        return $this-> belongsTo(Roles::class,'id_tipo');
    }
}
