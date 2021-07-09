<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
class ControllerUsuario extends Controller
{
    
    
    public function validar (Request $request){
        $respuesta;
        $filtro=Usuarios::where('usuario','=',$request->usuario,'and')->where('password','=',$request->password)->first();
        if($filtro!=null)
        {
        $respuesta='ok';}
        else
        {$respuesta='fail';}
        return $respuesta;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuarios::all();
        return response()->json($usuarios,200);
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

        $usuarios = new Usuarios;
        $usuarios->id_rol=$request->input('id_rol');
        $usuarios->nombre=$request->input('nombre');
        $usuarios->apellido_p=$request->input('apellido_p');
        $usuarios->apellido_m=$request->input('apellido_m');
        $usuarios->usuario=$request->input('usuario');
        $usuarios->password=$request->input('password');
        // $usuarios->imagen=$request->input('imagen');
        //comentario 
        
        if($request->hasFile('imagen'))
        {
            $imagen=$request->file('imagen')->store('img','public');
        }else{
            $imagen="";
        }
        $usuarios->imagen=$imagen;
        $usuarios->save();
        

        return response()->json($usuarios,200);
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
        return $usuarios=Usuarios::find($id);
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
        $usuarios=Usuarios::find($id);
        $usuarios->id_rol=$request->input('id_rol');
        $usuarios->nombre=$request->input('nombre');
        $usuarios->apellido_p=$request->input('apellido_p');
        $usuarios->apellido_m=$request->input('apellido_m');
        $usuarios->usuario=$request->input('usuario');
        $usuarios->password=$request->input('password');
        
        if($request->hasfile('imagen')){
            $imagenantigua=$usuarios->imagen;
            Storage::delete('/public',$imagen);
            $usuarios->imagen=$request->file('imagen')->storage('img','public');
        }else{
            $usuarios->update();
        }
        return response()->json("ok",200);


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
        $usuarios=Usuarios::destroy($id);
        return response()->json("usuario eliminado",200);
    }
}
