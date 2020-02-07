<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cruz;
class ApiRopasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return cruz::all();
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
         $ropas = new cruz;
        $ropas->id_administrador=$request->get('id_administrador');
        $ropas->nombre=$request->get('nombre');
        $ropas->apellidos=$request->get('apellidos');
        $ropas->direccion=$request->get('direccion');
        $ropas->telefono=$request->get('telefono');
        $ropas->email=$request->get('email');

        $ropas->save();
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
         $ropas=cruz::find($id);
        return $ropas;
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
        $ropas=cruz::find($id);
        $ropas->id_administrador=$request->get('id_administrador');
        $ropas->nombre=$request->get('nombre');
        $ropas->apellidos=$request->get('apellidos');
        $ropas->direccion=$request->get('direccion');
        $ropas->telefono=$request->get('telefono');
        $ropas->email=$request->get('email');

        $ropas->update();
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
         return cruz::destroy($id);
    }
}
