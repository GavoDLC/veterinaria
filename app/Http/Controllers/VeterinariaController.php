<?php

namespace App\Http\Controllers;

use App\Models\Veterinaria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VeterinariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['mascotas']=Veterinaria::paginate(8);



        return view('veterinaria.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('veterinaria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recepción de todos los datos
        //$datosMascota=request()->all();

        //recepcion de los datos excepto el token del formulario
        $datosMascota=request()->except('_token');


        
        if($request->hasFile('foto_mascota')){
            //si hay fotografias alteramos el nombre de ese campo y lo insertamos en public/uploads
            $datosMascota['foto_mascota']=$request->file('foto_mascota')->store('uploads','public');
        }
        if($request->hasFile('foto_dueño')){
            //si hay fotografias alteramos el nombre de ese campo y lo insertamos en public/uploads
            $datosMascota['foto_dueño']=$request->file('foto_dueño')->store('uploads','public');
        }

    
        //insertar los datos en la base de datos en la tabla de mascotas
        Veterinaria::insert($datosMascota);

        return view('veterinaria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Veterinaria $veterinaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $veterinaria=Veterinaria::findOrFail($id);
        return view('veterinaria.edit', compact('veterinaria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosMascota=request()->except('_token','_method');


        if($request->hasFile('foto_mascota')){
            $veterinaria=Veterinaria::findOrFail($id);
            Storage::delete('public/'.$veterinaria->foto_mascota);
            //si hay fotografias alteramos el nombre de ese campo y lo insertamos en public/uploads
            $datosMascota['foto_mascota']=$request->file('foto_mascota')->store('uploads','public');
        }
        if($request->hasFile('foto_dueño')){
            $veterinaria=Veterinaria::findOrFail($id);
            Storage::delete('public/'.$veterinaria->foto_dueño);
            //si hay fotografias alteramos el nombre de ese campo y lo insertamos en public/uploads
            $datosMascota['foto_dueño']=$request->file('foto_dueño')->store('uploads','public');
        }


        Veterinaria::where('id','=',$id)->update($datosMascota);

        $veterinaria=Veterinaria::findOrFail($id);
        return view('veterinaria.edit', compact('veterinaria'));
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Veterinaria::destroy($id);
        return redirect('veterinaria');
    }
}
