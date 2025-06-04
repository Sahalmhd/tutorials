<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Runner\HookMethod;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('create',[HomeController::class,"create"])->name('create');
Route::post('save',[HomeController::class,'save'])->name('save');
Route::get('edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('update',[HomeController::class,'update'])->name('update');
Route::get('delete/{id}',[HomeController::class,'delete'])->name('delete');

Route::get('activate/{id}',[HomeController::class,'activate'])->name('activate');