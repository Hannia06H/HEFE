<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::all();
        return view('personal', compact('personal'));
    }

    public function store(Request $request)
    {
        $personal = new Personal;
        $personal->nombre = $request->nombre;
        $personal->entrada = $request->entrada;
        $personal->salida = $request->salida;
        $personal->dias_semana = json_encode($request->dias);
        $personal->contacto = $request->contacto;
        $personal->direccion = $request->direccion;
        $personal->save();
        $personal = Personal::all();
        return view('personal', compact('personal'));
    }

    public function register()
    {
        return view('registro_perso');
    }

    public function find($id)
{
    $personal = Personal::find($idPersonal);
    return view('dias_perso', compact('personal'));
}

    public function edit($id)
    {
        $personal = Personal::find($id);
        return view('editar_perso', compact('personal'));
    }

    public function update(Request $request, string $id)
    {
        $personal = Personal::find($id);
        $personal->nombre = $request->nombre;
        $personal->entrada = $request->entrada;
        $personal->salida = $request->salida;
        $personal->dias_semana = json_encode($request->dias);
        $personal->contacto = $request->contacto;
        $personal->direccion = $request->direccion;
        $personal->save();
        $personal = Personal::all();
        return view('personal', compact('personal'));
    }

    public function destroy($id)
    {
        $personal = Personal::find($id);
        $personal->delete($id); 
        $personal = Personal::all();
        return view('personal', compact('personal'));
    }

    public function most($idPersonal)
    {
        $personal = Personal::find($idPersonal);
        return view('eliminar_perso', compact('personal'));
    }
}