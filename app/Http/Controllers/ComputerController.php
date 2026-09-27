<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    // GET /v1/computers
    public function index()
    {
        return Computer::all();
    }

    // POST /v1/computers
    public function store(Request $request)
    {
        $computer = Computer::create($request->all());
        return response()->json($computer, 201);
    }

    // GET /v1/computers/{id}
    public function show($id)
    {
        return Computer::findOrFail($id);
    }

    // PUT /v1/computers/{id}
    public function update(Request $request, $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->update($request->all());
        return response()->json($computer, 200);
    }

    // DELETE /v1/computers/{id}
    public function destroy($id)
    {
        Computer::destroy($id);
        return response()->json(['message' => 'Computador eliminado correctamente'], 200);
    }
}
