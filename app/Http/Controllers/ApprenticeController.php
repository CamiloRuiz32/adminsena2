<?php

namespace App\Http\Controllers;

 use App\Models\Apprentice;

class ApprenticesController extends Controller
{
    public function index()
    {
        return response()->json(Apprentice::all());
    }
}