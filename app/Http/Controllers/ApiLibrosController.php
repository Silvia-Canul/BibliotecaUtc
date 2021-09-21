<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Storage;
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
        return $libros=Libro::all();

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

        $libros = new Libro;
        $libros->ISBN=$request->input('ISBN');
        $libros->titulo=$request->input('titulo');
        $libros->id_autor=$request->input('id_autor');
        $libros->id_editorial=$request->input('id_editorial');
        $libros->edicion=$request->input('edicion');
        $libros->id_carrera=$request->input('id_carrera');
        $libros->paginas=$request->input('paginas');
        $libros->id_clasifidewey=$request->input('id_clasifidewey');
        $libros->resenia=$request->input('resenia');
        $libros->ubicacion=$request->input('ubicacion');
         $libros->describe_estado=$request->input('describe_estado');
        $libros->foto=$request->input('foto');
        $libros->created_at=$request->input('created_at');
        $libros->updated_at=$request->input('updated_at');
        $libros->activo=$request->input('activo');


        if ($request->hasFile('foto'))
        {
          $foto=$request->file('foto')->store('img','public');  
        }else{
            $foto="";
        }
        $libros->foto=$foto;
        $libros->save();


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
        return $libros=Libro::find($id);
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
        $libros = new Libro;
        $libros= Libro::find($id);
        $libros->ISBN=$request->input('ISBN');
        $libros->titulo=$request->input('titulo');
        $libros->id_autor=$request->input('id_autor');
        $libros->id_editorial=$request->input('id_editorial');
        $libros->edicion=$request->input('edicion');
        $libros->id_carrera=$request->input('id_carrera');
        $libros->paginas=$request->input('paginas');
        $libros->id_clasifidewey=$request->input('id_clasifidewey');
        $libros->resenia=$request->input('resenia');
        $libros->ubicacion=$request->input('ubicacion');
        $libros->describe_estado=$request->input('describe_estado');
        $libros->foto=$request->input('foto');
        $libros->created_at=$request->input('created_at');
        $libros->updated_at=$request->input('updated_at');
        $libros->activo=$request->input('activo');

           $libros->update();

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
        return $libros=Libro::destroy($id);
        //return response()->json("libro eliminado",200);
    }
    
}
