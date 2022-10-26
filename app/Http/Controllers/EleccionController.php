<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleccion;

 class EleccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "index";
        $elecciones = Eleccion::all();
        return view('eleccion/list', compact('elecciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('eleccion/create');
    }

    function validateData(Request $request)
    {
        $request->validate([
            'periodo' => 'required',
            'fecha'=>'required',
            'fechaapertura'=>'required',
            'horaapertura'=>'required',
            'fechacierre'=>'required',
            'horacierre'=>'required',
            'observaciones'=>'required',
        ]);
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
        $this->validateData($request);
        $data=[
            'periodo'       => $request->periodo,
		    'fecha'         => $request->fecha,
		    'fechaapertura' => $request->fechaapertura,
		    'horaapertura'  => $request->horaapertura,
		    'fechacierre'   => $request->fechacierre,
		    'horacierre'    => $request->horacierre,
		    'observaciones' => $request->observaciones,
        ];
        $eleccion = Eleccion::create($data);
        return redirect('eleccion')
        ->with('success', $eleccion->periodo.' insertado correctamente');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $eleccion = Eleccion::find($id);
        return view('eleccion/edit', compact('eleccion'));
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
        Eleccion::whereId($id)->delete();
        return redirect('eleccion')
        ->with('success', 'eliminado');
        
    }
}
