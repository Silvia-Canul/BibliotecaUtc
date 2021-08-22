<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\UserLogin;
use Session;
use Redirect;
use Cache;
use Cookie;

class AccesoController extends Controller
{
    public function validar(Request $request){
        // return 'HOLA';

        //return Usuario::all();
        $user=$request->usuario;
        $contraseña=$request->password;
        
        $resp= UserLogin::where('nombres','=',$user)
        ->where('password','=', $contraseña)
        ->get();
       

        // return $resp;
        if (count($resp)>0){

             $user =$resp[0]->nombres.' '.$resp[0]->apellido_p;

            Session::put('denominacion',$resp[0]->denominacion->denominacion);
            Session::put('ape',$resp[0]->nombres);


            if($resp[0]->denominacion->denominacion=="usuario")
                return Redirect::to('prestamo');
            elseif ($resp[0]->denominacion->denominacion=="administrador")
                return Redirect::to('prestamo');
            }
            else
                return Redirect::to('login');
            
    }

    public function salir(){
        Session::flush();
        Session::reflash();
        Cache::flush();
        Cookie::forget('laravel_session');
        unset($_COOKIE);
        unset($_SESSION);

        return Redirect::to('login');
    }
}
