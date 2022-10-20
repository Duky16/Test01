<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('index', [StudentController::class, 'get_all_student']);

Route::get('edit', [StudentController::class, 'get_student_by_id']);