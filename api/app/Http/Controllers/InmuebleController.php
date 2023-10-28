<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inmuebles = Inmueble::all();
        return $inmuebles;
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('inmuebles.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $inmueble = new Inmueble();
        $inmueble->Nombre = $request->Nombre;
        $inmueble->Tipo = $request->Tipo;
        $inmueble->Zonificacion = $request->Zonificacion;
        $inmueble->Condicion = $request->Condicion;
        $inmueble->Tiempo_Alquiler = $request->Tiempo_Alquiler;
        $inmueble->Meses = $request->Meses;
        $inmueble->Precio = $request->Precio;
        $inmueble->Mts2 = $request->Mts2;
        $inmueble->Habitaciones = $request->Habitaciones;
        $inmueble->Baños = $request->Baños;

        $inmueble->save();


        // $campos=[
        //     'Nombre'=>'required|string|max:100',
        //     'Precio'=>'required|integer|max:100',
        //     'Zonificacion'=>'required|string|max:100',
        //     'Condicion'=>'required|string|max:100',
        //     'Tiempo_Alquiler'=>'required|string|max:100',
        //     'Mts2'=>'required|integer|max:100000000000',
        //     'Habitaciones'=>'required|integer|max:1000',
        //     'Baños'=>'required|integer|max:100',

        // ];

        // $mensaje=[
        //     'required'=>'El :attribute es requerido',
        //     'Mts2.required'=>'Los metros cuadrados son requeridos',
        //     'Habitaciones.required'=>'Las habitaciones son requeridas',
        //     'Baños.required'=>'Los baños son requeridos',
        //     'Zonificacion.required'=>'La zonificacion es requerida',
        //     'Condicion.required'=>'La condicion es requerida',
        //     'Tiempo_Alquiler.required'=>'El tiempo de alquiler es requerido',

        // ];

        // $this->validate($request, $campos, $mensaje);   

        // $datosInmueble = request()->except('_token');
        // Inmueble::insert($datosInmueble);
        // //return response()->json($datosInmueble);
        // return redirect('inmuebles')->with('Mensaje', 'Inmueble agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $inmueble = Inmueble::findOrFail($id);
        return $inmueble;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    //     $inmueble = Inmueble::findOrFail($id);
    //     return view('inmuebles.edit', compact('inmueble'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inmueble = Inmueble::findOrFail($request->id);
        $inmueble->Nombre = $request->Nombre;
        $inmueble->Tipo = $request->Tipo;
        $inmueble->Precio = $request->Precio;
        $inmueble->Zonificacion = $request->Zonificacion;
        $inmueble->Condicion = $request->Condicion;
        $inmueble->Tiempo_Alquiler = $request->Tiempo_Alquiler;
        $inmueble->Meses = $request->Meses;
        $inmueble->Mts2 = $request->Mts2;
        $inmueble->Habitaciones = $request->Habitaciones;
        $inmueble->Baños = $request->Baños;

        $inmueble->save();

        return $inmueble;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inmueble = Inmueble::destroy($id);
        return $inmueble;
        //return redirect('inmuebles')->with('Mensaje', 'Inmueble eliminado con exito');
    }
}
