<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
    // Listar todos los aprendices
    public function index()
    {
        return Apprentice::all();
    }

    // Crear un nuevo aprendiz
    public function store(Request $request)
    {
        $apprentice = Apprentice::create($request->all());
        return response()->json($apprentice, 201);
    }

    // Mostrar un aprendiz específico
    public function show($id)
    {
        return Apprentice::findOrFail($id);
    }

    // Actualizar aprendiz
    public function update(Request $request, $id)
    {
        $apprentice = Apprentice::findOrFail($id);
        $apprentice->update($request->all());
        return response()->json($apprentice, 200);
    }

    // Eliminar aprendiz
    public function destroy($id)
    {
        Apprentice::destroy($id);
        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
