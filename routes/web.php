<?php

use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HamburgerButtonController;
use App\Http\Controllers\Teachers\TeachersControllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class , 'login']);

Route::get('/login' , [AuthController::class, 'login'])->name('login');
Route::post('/hamburger' , [HamburgerButtonController::class, 'activeBtn'])->name('hamburger');

Route::controller(TeachersControllers::class)->group(function(){
    Route::get('/teachers' , 'index')->name('teacher.index');
    Route::get('/teachers/create' , 'create')->name('teacher.create');
    Route::post('/teacher/store' , 'store')->name('teacher.store');
    Route::get('/teachers/{id}' , 'show')->name('teacher.show');
});


Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

