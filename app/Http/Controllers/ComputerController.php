<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Cloudinary\Cloudinary;

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
        $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'computers',
                'resource_type' => 'image',
            ]
        );

        $computer = Computer::create([
            'number' => $request->number,
            'brand' => $request->brand,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

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
        $computer->update($request->only(['number', 'brand']));
        return response()->json($computer, 200);
    }

    // DELETE /v1/computers/{id}
    public function destroy($id)
    {
        Computer::destroy($id);
        return response()->json(['message' => 'Computador eliminado correctamente'], 200);
    }
}
