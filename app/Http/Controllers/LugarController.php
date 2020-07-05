<?php

namespace App\Http\Controllers;

use App\Lugar;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLugarRequest;
use App\Http\Requests\UpdateLugarRequest;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar'))
        {
            $destinos = Lugar::where('nombre', 'like' , '%' . $request->txtBuscar . '%')
            ->orWhere('giro', $request->txtBuscar)
            ->get();
        }
        else{
            $destinos = Lugar::all();
        }



        return $destinos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLugarRequest $request)
    {


        $input = $request->all();
        if($request->has('imagen'))
            $input['imagen'] = $this->cargarImagen($request->imagen);

        
         if($request->has('galeria1'))
             $input['galeria1'] = $this->cargarImagen($request->galeria1);

    
         if($request->has('galeria2'))
             $input['galeria2'] = $this->cargarImagen($request->galeria2);

    
        if($request->has('galeria3'))
            $input['galeria3'] = $this->cargarImagen($request->galeria3);

       
        if($request->has('galeria4'))
            $input['galeria4'] = $this->cargarImagen($request->galeria4);


        Lugar::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Destino Turisticos registrado exitosamente'
        ], 200);
    }

    
    private function cargarImagen($file){
        $nombreArchivo = time(). "." . $file->getClientOriginalExtension();
        $file->move(public_path('galerias'), $nombreArchivo);
        return $nombreArchivo;


    }


    public function show(Lugar $destino)
    {
        return $destino;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLugarRequest $request, Lugar $destino)
    {
        $input = $request->all();
        if($request->has('imagen'))
        $input['imagen'] = $this->cargarImagen($request->imagen);
        $destino->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Destinos turistico actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lugar::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Destino turistico borrado exitosamente'
        ], 200);
    }
}
