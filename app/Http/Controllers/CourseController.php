<?php

 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // GET /v1/courses
    public function index()
    {
        return Course::all();
    }

    // POST /v1/courses
    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return response()->json($course, 201);
    }

    // GET /v1/courses/{id}
    public function show($id)
    {
        return Course::findOrFail($id);
    }

    // PUT /v1/courses/{id}
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return response()->json($course, 200);
    }

    // DELETE /v1/courses/{id}
    public function destroy($id)
    {
        Course::destroy($id);
        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
