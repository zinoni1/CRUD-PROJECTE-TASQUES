<?php

namespace App\Http\Controllers;

use App\Models\Tasca;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\Projecte;


class TascaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tasca::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Projecte $projecte)
    {
        return view('tasca_create', compact('projecte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Projecte $projecte,)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
            'completada' => 'boolean',
            'descripcio' => 'required',
        ]);

        $tasca = new Tasca([
            'nom' => $request->nom,
            'slug' => $request->slug,
            'completada' => $request->has('completada'),
            'descripcio' => $request->descripcio,
            'projecte_id' => $projecte->id,
        ]);

        $tasca->save();

        return redirect()->route('projecte.index')->with('success', 'Tasca creada exitosamente');
    }



    /**
     * Display the specified resource.
     */
    public function show(Projecte $projecte, Tasca $tasca)
    {
        return view('tasca_show', compact('tasca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projecte $projecte, Tasca $tasca)
    {
        return view('tasca_editar', compact('projecte','tasca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projecte $projecte, Tasca $tasca)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
            'completada' => 'required|boolean',
            'descripcio' => 'required',
        ]);

        $tasca->update($request->all());

        // Redirigir a la vista de tareas con un mensaje de éxito
        return redirect()->route('projecte.index')->with('success', 'Tarea actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projecte $projecte, Tasca $tasca)
    {
        $tasca->delete();
        return redirect()->back()->with('success', 'Tasca eliminada exitosamente');
    }

}
