<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MuralResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'greeting' => 'Gracias por usar la API de Murales de Ciudad de Buenos Aires',
            'nombre' => $this->nombre,
            'autores' => $this->autores,
            'tecnica' => $this->tecnica,
            'ubicacion' => $this->ubicacion,
            'barrio' => $this->barrio,

        ];
    }
}
