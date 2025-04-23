<?php

use App\Http\Controllers\DarkOrLightController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HamburgerButtonController;
use App\Http\Controllers\Teachers\TeachersControllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class , 'login']);

Route::get('/login' , [AuthController::class, 'login'])->name('login');
Route::post('/hamburger' , [HamburgerButtonController::class, 'activeBtn'])->name('hamburger');
Route::get('/dark-or-light' , [DarkOrLightController::class, 'darkOrLight'])->name('dark-or-light');
Route::controller(TeachersControllers::class)->group(function(){
    Route::get('/teachers' , 'index')->name('teacher.index');
    Route::get('/teachers/create' , 'create')->name('teacher.create');
    Route::post('/teacher/store' , 'store')->name('teacher.store');
    Route::get('/teachers/{id}' , 'show')->name('teacher.show');
    Route::put('/teachers/{id}' , 'update')->name('teacher.update');
    Route::delete('/teacher/{id}', 'destroy')->name('teacher.delete');
});


Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

