<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    // GET /v1/teachers
    public function index()
    {
        return response()->json(Teacher::all());
    }

    // POST /v1/teachers
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return response()->json($teacher, 201);
    }

    // GET /v1/teachers/{id}
    public function show($id)
    {
        return response()->json(Teacher::findOrFail($id));
    }

    // PUT /v1/teachers/{id}
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return response()->json($teacher, 200);
    }

    // DELETE /v1/teachers/{id}
    public function destroy($id)
    {
        Teacher::destroy($id);
        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
