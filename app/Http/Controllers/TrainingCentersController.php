<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCentersController extends Controller
{
    // GET /v1/trainingCenters
    public function index()
    {
        return TrainingCenter::all();
    }

    // POST /v1/trainingCenters
    public function store(Request $request)
    {
        $center = TrainingCenter::create($request->all());
        return response()->json($center, 201);
    }

    // GET /v1/trainingCenters/{id}
    public function show($id)
    {
        return TrainingCenter::findOrFail($id);
    }

    // PUT /v1/trainingCenters/{id}
    public function update(Request $request, $id)
    {
        $center = TrainingCenter::findOrFail($id);
        $center->update($request->all());
        return response()->json($center, 200);
    }

    // DELETE /v1/trainingCenters/{id}
    public function destroy($id)
    {
        TrainingCenter::destroy($id);
        return response()->json(['message' => 'Centro de formación eliminado correctamente'], 200);
    }
}
