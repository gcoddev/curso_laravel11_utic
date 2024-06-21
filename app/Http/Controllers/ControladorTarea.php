<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorTarea extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // SELECT en la base de datos
        // $tareas = Tarea::select('titulo', 'estado')->where('estado', '=', '1')->get();
        $tareas = null;
        if (Auth::check()) {
            $tareas = Tarea::select('id_tarea', 'titulo', 'estado')->where('id_usuario', Auth::user()->id)->get();
        }
        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tareas.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // INSERT en la base de datos
        // dd($request);

        $nuevaTarea = new Tarea();
        $nuevaTarea->titulo = $request->titulo;
        $nuevaTarea->descripcion = $request->descripcion;
        $nuevaTarea->id_usuario = Auth::user()->id;
        $nuevaTarea->save();

        // return back();
        return redirect()->route('tareas')->with(['mensaje' => 'Tarea creada']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_tarea)
    {
        // Vista individual
        $tarea = Tarea::find($id_tarea);

        return view('tareas.tarea', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_tarea)
    {
        // Redirigir a un formulario para editar
        $tarea = Tarea::find($id_tarea);
        return view('tareas.editar', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_tarea)
    {
        // UPDATE en la base de datos
        $tarea = Tarea::find($id_tarea);
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->save();

        return redirect()->route('tareas')->with(['mensaje' => 'Tarea editada']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_tarea)
    {
        // DELETE en la base de datos
        $tarea = Tarea::find($id_tarea);
        $tarea->delete();

        return redirect()->route('tareas');
    }
}
