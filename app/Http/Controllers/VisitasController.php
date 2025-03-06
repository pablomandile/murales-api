<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitaRequest;
use App\Http\Resources\VisitaResource;
use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murales = Visita::all();

        return VisitaResource::collection(Visita::all());
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
    public function store(VisitaRequest $request): JsonResponse
    {
        $visita = Visita::create($request->all());

        return response()->json([
            'success' => 'true',
            'Data' => new VisitaResource($visita)
        ], 201);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
