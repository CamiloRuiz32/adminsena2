
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;


Route::apiResource('apprentices', ApprenticeController::class);

Route::apiResource('courses', CourseController::class);

Route::apiResource('teachers', TeacherController::class);

//Training Centers
Route::get('trainingCenters', [TrainingCentersController::class, 'index']);
Route::post('trainingCenters', [TrainingCentersController::class, 'store']);
Route::get('trainingCenters/{id}', [TrainingCentersController::class, 'show']);
Route::put('trainingCenters/{id}', [TrainingCentersController::class, 'update']);
Route::delete('trainingCenters/{id}', [TrainingCentersController::class, 'destroy']);


//computers
Route::get('computers', [ComputerController::class, 'index']);
Route::post('computers', [ComputerController::class, 'store']);
Route::get('computers/{id}', [ComputerController::class, 'show']);
Route::put('computers/{id}', [ComputerController::class, 'update']);
Route::delete('computers/{id}', [ComputerController::class, 'destroy']);


//area
Route::get('areas', [AreaController::class, 'index']);
Route::post('areas', [AreaController::class, 'store']);
Route::get('areas/{id}', [AreaController::class, 'show']);
Route::put('areas/{id}', [AreaController::class, 'update']);
Route::delete('areas/{id}', [AreaController::class, 'destroy']);

