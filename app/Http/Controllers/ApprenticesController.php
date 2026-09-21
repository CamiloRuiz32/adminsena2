<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Apprentice;  

class ApprenticesController extends Controller
{
    public function index()
    {
        // Puedes devolver datos o un mensaje de prueba
        return response()->json(['message' => 'Funciona correctamente']);
    }
}