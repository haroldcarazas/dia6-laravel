<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use App\Models\AbogadoAsunto;
use Illuminate\Http\Request;

class AbogadoAsuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abogados = Abogado::all();

        foreach ($abogados as $abogado) {
            $abogado->asuntos = $abogado->asuntos;
        }

        return response()->json($abogados);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AbogadoAsunto $abogadoAsunto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbogadoAsunto $abogadoAsunto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AbogadoAsunto $abogadoAsunto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbogadoAsunto $abogadoAsunto)
    {
        //
    }
}
