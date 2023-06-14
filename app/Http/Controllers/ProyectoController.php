<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyecto = proyecto::get();
        return view('Proyecto.index', compact('proyecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $proyecto = new proyecto;        
        $proyecto->NombreProyecto = $request->NombreProyecto;
        $proyecto->fuenteFondos =  $request->fuenteFondos;
        $proyecto->MontoPlanificado =  $request->MontoPlanificado;
        $proyecto->MontoPatrocinado =  $request->MontoPatrocinado;
        $proyecto->MontoFondosPropios =  $request->MontoFondosPropios;
     

        
    
        $proyecto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = proyecto::findOrFail($id);
        return view('Proyecto.edit', ['Proyecto' => $proyecto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $proyecto = proyecto::findOrFail($id);
        $proyecto->NombreProyecto = $request->NombreProyecto;
        $proyecto->fuenteFondos =  $request->fuenteFondos;
        $proyecto->MontoPlanificado =  $request->MontoPlanificado;
        $proyecto->MontoPatrocinado =  $request->MontoPatrocinado;
        $proyecto->MontoFondosPropios =  $request->MontoFondosPropios;
        $proyecto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $proyecto = proyecto::findOrFail($id);
        $proyecto->delete();
    }
}
