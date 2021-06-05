<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lector;

class ApiLectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $lectores=Lector::all();
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
        $lectores = new Lector;

        $lectores->nombre=$request->get('nombre');
        $lectores->apellido_p=$request->get('apellido_p');
        $lectores->apellido_m=$request->get('apellido_m');
        $lectores->correo=$request->get('correo');
        $lectores->grupo=$request->get('grupo');
        $lectores->cuatrimestre=$request->get('cuatrimestre');
        $lectores->activo=$request->get('activo');
        $lectores->id_tipo=$request->get('id_tipo');

     

        $lectores->save();
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
        return $lectores=Lector::find($id);
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
        $lectores=Lector::find($id);

        $lectores->nombre=$request->get('nombre');
        $lectores->apellido_p=$request->get('apellido_p');
        $lectores->apellido_m=$request->get('apellido_m');
        $lectores->correo=$request->get('correo');
        $lectores->grupo=$request->get('grupo');
        $lectores->cuatrimestre=$request->get('cuatrimestre');
        $lectores->activo=$request->get('activo');
        $lectores->id_tipo=$request->get('id_tipo');

     

        $lectores->update();
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
        return $lectores=Lector::destroy($id);
    }
}
