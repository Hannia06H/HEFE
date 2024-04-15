<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use App\Models\Domicilio;
use App\Models\Proveedor;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function upload()
    {
        return view("layouts.insert");
    }
    public function save(Request $request)
        {
            $producto = new Inventario();
            $producto->nombre = $request->input('nombre');
            $producto->cantidad = $request->input('cantidad');
            $producto->precioProv = $request->input('precioProv');
            $producto->precioCliente = $request->input('precioCliente');
            $producto->caducidad = $request->input('fecha');
            $producto->save();

            return redirect()->back()->with('success', 'Producto guardado correctamente');
        }

    public function edit()
    {
        $produc = Inventario::all();
        return view('inventario', compact('produc'));
    }
    public function editProduc($id)
    {
        $produc=Inventario::where('id',$id)->get();
        return view('layouts.editProduc', compact('produc'));    
    }
    public function modProduc(Request $request, $id)
    {
        $produc = Inventario::find($id);

        $produc->nombre = $request->input('nombre');
        $produc->cantidad = $request->input('cantidad');
        $produc->precioProv = $request->input('precioProv');
        $produc->precioCliente = $request->input('precioCliente');
        $produc->caducidad = $request->input('caducidad');
        $produc->save();

        return view('layouts.editProduc', compact('produc'));
    }
    
    public function eliminarRegistro($id)
    {
        $Produc = Inventario::findOrFail($id);

        $Produc->delete();

                return back()->with('success', 'Registro eliminado correctamente'); 

    }
    public function servdom()
    {
        return view("servdom");
    }
    public function saveDom(Request $request)
        {
            $producto = new Domicilio();
            $producto->nombre = $request->input('nombre');
            $producto->apellido = $request->input('apellido');
            $producto->celular = $request->input('celular');
            $producto->recibe = $request->input('recibe');
            $producto->fecha = $request->input('fecha');
            $producto->referencia = $request->input('referencia');
            $producto->save();

            return redirect()->back()->with('success', 'Producto guardado correctamente');
        }
         public function allDom()
         {
            $dom = Domicilio::all();
        return view('layouts.mostDom', compact('dom'));
        }
        public function editDom($id)
    {
        $dom=Domicilio::where('id',$id)->get();
        return view('layouts.editDom', compact('dom'));    
    }
    public function modDom(Request $request, $id)
    {
        $dom= Domicilio::find($id);

        $dom->nombre = $request->input('nombre');
        $dom->apellido = $request->input('apellido');
        $dom->recibe = $request->input('recibe');
        $dom->fecha = $request->input('fecha');
        $dom->referencia = $request->input('referencia');
        $dom->save();

        return view('layouts.editDom', compact('dom'));
    }
    
    public function eliminarDomicilio($id)
    {
        $dom = Domicilio::findOrFail($id);
        $dom->delete();
                return back()->with('success', 'Registro eliminado correctamente'); 

    }
    
    public function prov(){
        return view ("layouts.provInsert");
    }
    public function saveProv(Request $request)
    {
            $prov = new Proveedor();
            $prov->empresa = $request->input('empresa');
            $prov->correo = $request->input('correo');
            $prov->telefono = $request->input('telefono');
            $prov->referencia = $request->input('referencia');
            $prov->save();

            return redirect()->back()->with('success', 'Producto guardado correctamente');
        }
        public function allProv()
         {
            $prov = Proveedor::all();
        return view('layouts.mostProv', compact('prov'));
        }
        public function editProv($id)
    {
        $dom=Proveedor::where('id',$id)->get();
        return view('layouts.editProv', compact('prov'));    
    }
    public function modProv(Request $request, $id)
    {
        $dom= Domicilio::find($id);

        $dom->nombre = $request->input('nombre');
        $dom->apellido = $request->input('apellido');
        $dom->recibe = $request->input('recibe');
        $dom->fecha = $request->input('fecha');
        $dom->referencia = $request->input('referencia');
        $dom->save();

        return view('layouts.editDom', compact('dom'));
    }
    }


