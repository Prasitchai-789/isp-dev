<?php

use App\Http\Controllers\ComputerController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Console\Command;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::prefix('dashboard')->middleware(['auth:sanctum','verified'])->group(function(){
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
Route::get('/counter', Counter::class);

Route::controller(SaleController::class)->group(function () {
    Route::get('/product/', 'productIndex')->name('product.index');
});

Route::controller(ComputerController::class)->group(function () {
    Route::get('/computer/', 'computerIndex')->name('computer.index');
});

