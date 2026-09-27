<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    // GET /v1/areas
    public function index()
    {
        return Area::all();
    }

    // POST /v1/areas
    public function store(Request $request)
    {
        $area = Area::create($request->all());
        return response()->json($area, 201);
    }

    // GET /v1/areas/{id}
    public function show($id)
    {
        return Area::findOrFail($id);
    }

    // PUT /v1/areas/{id}
    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $area->update($request->all());
        return response()->json($area, 200);
    }

    // DELETE /v1/areas/{id}
    public function destroy($id)
    {
        Area::destroy($id);
        return response()->json(['message' => 'Área eliminada correctamente'], 200);
    }
}
