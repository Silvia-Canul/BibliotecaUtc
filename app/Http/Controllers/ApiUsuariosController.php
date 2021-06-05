<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ApiUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $usuarios=Usuario::all();
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
        $usuarios = new Usuario;

        $usuarios->nombres=$request->get('nombres');
        $usuarios->apellido_p=$request->get('apellido_p');
        $usuarios->apellido_m=$request->get('apellido_m');
        $usuarios->curp=$request->get('curp');
        $usuarios->direccion=$request->get('direccion');
        $usuarios->correo=$request->get('correo');
        $usuarios->telefono=$request->get('telefono');
        $usuarios->usser=$request->get('usser');
        $usuarios->password=$request->get('password');
        $usuarios->activo=$request->get('activo');
        $usuarios->id_rol=$request->get('id_rol');
     

        $usuarios->save();
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
        return $usuarios=Usuario::find($id);
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
        $usuarios=Usuario::find($id);

        $usuarios->nombres=$request->get('nombres');
        $usuarios->apellido_p=$request->get('apellido_p');
        $usuarios->apellido_m=$request->get('apellido_m');
        $usuarios->curp=$request->get('curp');
        $usuarios->direccion=$request->get('direccion');
        $usuarios->correo=$request->get('correo');
        $usuarios->telefono=$request->get('telefono');
        $usuarios->usser=$request->get('usser');
        $usuarios->password=$request->get('password');
        $usuarios->activo=$request->get('activo');
        $usuarios->id_rol=$request->get('id_rol');

        $usuarios->update();


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
        return $usuarios=Usuario::destroy($id);
    }
}
