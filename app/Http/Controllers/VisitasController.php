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
     * Store a newly created resource in storage.
     */
    public function store(VisitaRequest $request): JsonResponse
    {
        // dd('Llegó el POST a store', $request->all());
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
        $visita = Visita::find($id);

        // return response()->json($ticket, 200);
        return new VisitaResource($visita);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(VisitaRequest $request, string $id): JsonResponse
    {
        $visita = Visita::find($id);

        if (!$visita) {
            return response()->json(['success' => false, 'message' => 'Visita no encontrada'], 404);
        }

        $visita->update($request->all());

        return response()->json([
            'success' => 'true',
            'data' => new VisitaResource($visita)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Visita::find($id)->delete();

        return response()->json([
            'success' => 'true'
        ], 200);
    }
}
