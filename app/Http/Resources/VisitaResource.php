<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VisitaResource extends JsonResource
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
            'id' => $this->id,
            'fecha_visita' => $this->fecha_visita,
            'email' => $this->email,
            'calificacion_id' => $this->calificacion_id,
            'comentarios' => $this->comentarios,
            'mural_id' => $this->mural_id
        ];
    }
}
