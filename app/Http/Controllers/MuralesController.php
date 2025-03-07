<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mural;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MuralResource;


class MuralesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $murales = Mural::all();

        return MuralResource::collection(Mural::all());
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
    public function show(string $id)
    {
        $mural = Mural::find($id);

        // return response()->json($ticket, 200);
        return new MuralResource($mural);
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
