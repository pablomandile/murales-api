<?php

use App\Http\Controllers\MuralesController;
use App\Http\Controllers\VisitasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/murales', MuralesController::class, [
    'parameters' => ['murales' => 'mural']
]);

// apiResource para rutas estilo “API” sin las de create/edit
Route::apiResource('visitas', VisitasController::class);

Route::post('/visitas/test', function (Request $request) {
    dd('Llegó a la ruta test', $request->all());
});