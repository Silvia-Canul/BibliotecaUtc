<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contenedor;

class ApiContenedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $contenedores=Contenedor::all();
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
        $contenedores = new Contenedor;

        $contenedores->nom_contenedor=$request->get('nom_contenedor');
        $contenedores->descripcion=$request->get('descripcion');
        $contenedores->save();
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
        return $contenedores = Contenedor::find($id);
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
        $contenedores=Contenedor::find($id);

        $contenedores->nom_contenedor=$request->get('nom_contenedor');
        $contenedores->descripcion=$request->get('descripcion');
        
        $contenedores->update();
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
        return $contenedores=Contenedor::destroy($id);
    }
}
