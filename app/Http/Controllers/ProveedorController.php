<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedor = Proveedor::all();
        return view('proveedores', compact('proveedor'));
    }

    public function register()
    {
        return view('registro_prov');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor;
        $proveedor->nombre = $request->nombre;
        $proveedor->responsable = $request->responsable;
        $proveedor->contacto = $request->contacto;
        $proveedor->direccion = $request->direccion;
        $proveedor->save();
        $proveedor = Proveedor::all();
        return view('proveedores', compact('proveedor'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        return view('editar_prov', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->nombre = $request->nombre;
        $proveedor->responsable = $request->responsable;
        $proveedor->contacto = $request->contacto;
        $proveedor->direccion = $request->direccion;
        $proveedor->save();
        $proveedor = Proveedor::all();
        return view('proveedores', compact('proveedor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete($id); 
        $proveedor = Proveedor::all();
        return view('proveedores', compact('proveedor'));
    }

    public function most($id)
    {
        $proveedor = Proveedor::find($id);
        return view('eliminar_prov', compact('proveedor'));
    }

}
