<?php

namespace App\Http\Controllers;

use App\Models\Projecte;
use App\Models\Tasca;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ProjecteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectes = Projecte::with('tasca')->get();
        return view('projecte',['projectes' => $projectes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projecte_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
        ]);

        Projecte::create($request->all());

        return redirect()->route('projecte.index')->with('success', 'Proyecto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projecte $projecte)
    {
        return view('projecte_show', compact('projecte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projecte $projecte)
    {
        return view('projecte_editar', compact('projecte'));
    }

    public function update(Request $request, Projecte $projecte)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
        ]);

        $projecte->update($request->all());

        return redirect()->route('projecte.index')->with('success', 'Proyecto actualizado exitosamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projecte $projecte)
    {
        $projecte->tasca()->delete();
        $projecte->delete();

        return redirect()->route('projecte.index')->with('success', 'Proyecto eliminado exitosamente');
    }
}
