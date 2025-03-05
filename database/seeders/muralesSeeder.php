<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class muralesSeeder extends Seeder
{
    public function run()
    {
        $filePath = storage_path('app/data/murales.csv');
        $file = fopen($filePath, 'r');

        // Leer la primera línea como encabezados y quitar la primera columna (ID)
        $header = fgetcsv($file, 0, ';');
        array_shift($header); // Eliminar la primera columna (ID)

        while ($row = fgetcsv($file, 0, ';')) {
            array_shift($row); // Eliminar el primer valor (ID)

            // Verificar si la cantidad de valores coincide con los encabezados
            if (count($header) !== count($row)) {
                continue; // Saltar filas con errores de formato
            }

            // Combinar los encabezados con los valores
            $data = array_combine($header, $row);

            DB::table('murales')->insert([
                'wkt' => trim($data['wkt'] ?? ''),
                'nombre' => trim($data['nombre'] ?? ''),
                'caract_sit' => trim($data['caract_sit'] ?? ''),
                'autores' => trim($data['autores'] ?? ''),
                'tecnica' => trim($data['tecnica'] ?? ''),
                'fecha' => trim($data['fecha'] ?? ''),
                'tamano' => trim($data['tamano'] ?? ''),
                'ubicacion' => trim($data['ubicacion'] ?? ''),
                'direccion' => trim($data['direccion'] ?? ''),
                'dom_orig' => trim($data['dom_orig'] ?? ''),
                'calle' => trim($data['calle'] ?? ''),
                'altura' => trim($data['altura'] ?? ''),
                'barrio' => trim($data['barrio'] ?? ''),
                'comuna' => trim($data['comuna'] ?? ''),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        fclose($file);
    }
}

