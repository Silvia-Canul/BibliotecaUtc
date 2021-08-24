<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
       return Materias::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $materias=new Materias;
       $materias->id_materia=$request->get('id_materia');
       $materias->nom_materia=$request->get('nom_materia');
       $materias->activo=$request->get('activo');

       $materia->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materias=Materias::find($id);
        return $materias;
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
        $materia = Materias::find($id);
        $materia->id_materia=$request->get('id_materia');
        $materia->nom_materia=$request->get('nom_materia');
        $materia->activo=$request->get('activo');
        
        $materia->update();
        
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
        return Materias::destroy($id);
    }
}
