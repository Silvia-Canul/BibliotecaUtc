<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maestros;

class Maestros extends Model
{
    use HasFactory;
    protected $table="maestros";
    protected $primaryKey="cedula";
    public $timestamps=false;
   
    protected $fillable=
    [
        'cedula',
        'nombre',
        
    ];
}
