
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticesController;

Route::get('/areas', [AreaController::class, 'index']);
Route::get('/computers', [ComputerController::class, 'index']);
Route::get('/trainingCenters', [TrainingCentersController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/apprentices', [ApprenticesController::class, 'index']);
