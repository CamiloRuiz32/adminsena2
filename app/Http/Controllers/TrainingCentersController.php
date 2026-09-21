<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCentersController extends Controller
{
     public function index()
    {
        return response()->json(TrainingCenter::all());
    }
}