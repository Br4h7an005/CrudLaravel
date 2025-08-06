<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Permisos;
use App\Models\Acciones;
use Illuminate\Support\Facades\Validator;


class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Roles::all();
        return view('roles.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $acciones = Acciones::pluck('id', 'nombre');
        return view('roles.new', compact('acciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nombre' => 'required | max:60'
        ]);

        if ($validated->fails()) {
            return back()->withErrors($validated)
                         ->withInput();
        } else {
            $datos = $request->all();
            $accion_id = $request->get("accion", []);
            $registroRol = Roles::create($datos);

        foreach ($accion_id as $id) {
            $datos = [
                'rol_id' => $registroRol->id, // <- nombre correcto del campo + forma correcta
                'accion_id' => $id
            ];
            Permisos::create($datos);
            }
            return redirect('roles')->with('type', 'success')
                                    ->with('message', 'Registro creado correctamente');
        }
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
    public function edit(string $id)
    {
        $datos = Roles::find($id);
        return view('roles.edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'nombre' => 'required | max:60'
        ]);

        if ($validated->fails()) {
            return back()->withErrors($validated)
                         ->withInput();
        } else {
            $datos = $request->all();
            Roles::create($datos);
            return redirect('roles')->with('type', 'success')
                                    ->with('message', 'Registro actualizado correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Roles::destroy($id);
        return redirect('roles')->with('type', 'danger')
                                ->with('message', 'Rol eliminado correctamente');
    }
}
