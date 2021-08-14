<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Registros;
use App\Models\Maestros;
use Carbon\Carbon;
use DB;

class RegisterBiblioteca extends Controller
{

    public function registro(Request $request){

        //$date = Carbon::now()->toDateString();
        //$actividad=$request->get('Actividad');
        $producto = $request->get('id_usuario');
        $pro=$request->get('SistemasOperativos');
        
        $user = Usuarios::where("id_usuario",'=',$producto)->select('nombres','id_usuario')->first();
        $maestro=Maestros::where("cedula",'=',$producto)->select('nombre','cedula')->first();

        $request->validate([
            'id_usuario' =>'required',
           'actividad' => 'required',  
        ]);

        //if($user!=null){
            
        //    $registro = new Registros;
        //    $registro->identificador=$user->id_usuario;
        //    $registro->nombre=$user->nombres;
        //    $registro->actividad=$request->get('actividad');
        //    $registro->save();

        //}else if($maestro!=null){
            
        //    $registro = new Registros;
        //    $registro->identificador=$maestro->cedula;
       //     $registro->nombre=$maestro->nombre;
        //    $registro->actividad=$request->get('actividad');
        //    $registro->save();  
        //}
        return $pro;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
