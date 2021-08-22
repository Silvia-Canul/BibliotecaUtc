<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class ApiLibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
       return Libros::where("Activo",'=','1')->select('titulo','ISBN')->get();
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
        $libro = new Libros;
        $libro->id_libro=$request->get('id_libro');
        $libro->codigo=$request->get('codigo');
        $libro->ISBN=$request->get('ISBN');
        $libro->titulo=$request->get('titulo');
        $libro->edicion=$request->get('edicion');
        $libro->editorial=$request->get('editorial');
        $libro->paginas=$request->get('paginas');
        $libro->idioma=$request->get('idioma');
        $libro->ejemplares=$request->get('ejemplares');
        $libro->descripcion=$request->get('descripcion');
        $libro->ubicacion=$request->get('ubicacion');
        $libro->foto=$request->get('foto');
        $libro->activo=$request->get('activo');
        $libro->created_at=$request->get('created_at');
        $libro->updated_at=$request->get('updated_at');
        // $libro->id_carrera=$request->get('id_carrera');
        // $libro->id_materia=$request->get('id_materia');
 
        
        $libro->save();
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
        $libro=Libros::where('Activo','=','1')->find($id);
        return $libro;
        
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
        $libro=Libros::find($id);

        $libro->id_libro=$request->get('id_libro');
        $libro->codigo=$request->get('codigo');
        $libro->ISBN=$request->get('ISBN');
        $libro->titulo=$request->get('titulo');
        $libro->edicion=$request->get('edicion');
        $libro->editorial=$request->get('editorial');
        $libro->paginas=$request->get('paginas');
        $libro->idioma=$request->get('idioma');
        $libro->ejemplares=$request->get('ejemplares');
        $libro->descripcion=$request->get('descripcion');
        $libro->ubicacion=$request->get('ubicacion');
        $libro->foto=$request->get('foto');
        $libro->activo=$request->get('activo');
        $libro->created_at=$request->get('created_at');
        $libro->updated_at=$request->get('update_at');
        // $libro->id_carrera=$request->get('id_carrera');
        // $libro->id_materia=$request->get('id_materia');
        
        $libro->update();
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
        return Libros::destroy($id);
    }
}
