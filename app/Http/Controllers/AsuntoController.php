<?php

namespace App\Http\Controllers;

use App\Models\Asunto;
use Illuminate\Http\Request;

class AsuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return response()->json("Asunto creado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Asunto $asunto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asunto $asunto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asunto $asunto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asunto $asunto)
    {
        //
    }
}
