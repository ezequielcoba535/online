<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fotos;
class ApiFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return fotos::all();
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
        $img = new fotos;
        $img->id_producto=$request->get('id_producto');
        $img->tipo=$request->get('tipo');
        $img->descripcion=$request->get('descripcion');
        $img->nombre=$request->get('nombre');
        $img->foto=$request->get('foto');

        $img->save();


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
        $img=fotos::find($id);
        return $img;
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
         $img = fotos::find($id);
        $img->id_producto=$request->get('id_producto');
        $img->tipo=$request->get('tipo');
        $img->descripcion=$request->get('descripcion');
        $img->nombre=$request->get('nombre');
        $img->foto=$request->get('foto');
        
        $img->update();
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
        return fotos::destroy($id);
    }
}
