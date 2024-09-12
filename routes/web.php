<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('student/alle',function (){
//     return view('student.index');
// });

// Route::get('/student/all',[StudentController::class,'index'])->name('student.index');
// Route::get('student/create',[StudentController::class,'create'])->name('student.create');
// Route::post('/student/store',[StudentController::class,'store'])->name('student.store');

// <----------student is commen word so we are group------------------->

Route::group(['perfix' => 'student'],function(){
    Route::get('/student/all',[StudentController::class,'index'])->name('student.index');
    Route::get('student/create',[StudentController::class,'create'])->name('student.create');
    Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
    // Route::get('/{student_id}',[StudentController::class,'edit'])->name('student.edit');
    Route::put('/{student_id}',[StudentController::class,'update'])->name('student.update');
    Route::get('/delete{student_id}',[StudentController::class,'delete'])->name('student.delete');
    Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');


});


