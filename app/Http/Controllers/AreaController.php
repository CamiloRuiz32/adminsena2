<?php

namespace App\Http\Controllers;


use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
        return response()->json(Area::all());
    }
}