<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\Prestamo;
use App\models\Detalle_prestamo;
use DB;

class ApiPrestamoController extends Controller
{
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
        $prestamo=new Prestamo;
        $prestamo->folio=$request->get('folio');
        $prestamo->fecha_prestamo=$request->get('fecha_prestamo');

        $records=[];

        $detalles=$request->get('detalles');

        for($i=0;$i<count($detalles);$i++)
        {
            $records[]=[
                'folio'=>$request->get('folio'),
                'id_libro'=>$detalles[$i]['id_libro'],
                'ISBN'=>$detalles[$i]['ISBN'],
                //'fecha_prestamo'=>$detalles[$i]['fecha_prestamo'],
                'describe_estado'=>$detalles[$i]['describe_estado']
                //'activo'=>$request->get('activo')
            ];
            $activo=$detalles[$i]['id_libro'];
            DB::update("UPDATE libros
                        SET activo='0'
                        where id_libro='$activo'");
        }
        if($records!=null){
            $prestamo->save();

            Detalle_prestamo::insert($records);
        }
        

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
