<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthCheck;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/',[LoginController::class,'loginPage'])->name('login-page');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('logout',[LoginController::class,'Logout'])->name('logout');




Route::middleware([Authcheck::class])->group(function () {
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('create',[HomeController::class,"create"])->name('create');
Route::post('save',[HomeController::class,'save'])->name('save');
Route::get('edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('update',[HomeController::class,'update'])->name('update');
Route::get('view/{id}',[HomeController::class,'view'])->name('view');
Route::get('delete/{id}',[HomeController::class,'delete'])->name('delete');
Route::get('activate/{id}',[HomeController::class,'activate'])->name('activate');
});

Route::get('admin',[HomeController::class,'admin'])->name('admin');

