<?php

use App\Livewire\Counter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Livewire\Pro\ReportMachineryIndex;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\PRO\MachineryController;

Route::group(['middleware' => ['role:developer|admin|user|staff']], function () {
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destrory']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destrory']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destrory']);

});

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/pdf', [PDFController::class, 'index'])->name('pdf.index');


// Route::prefix('dashboard')->middleware(['auth:sanctum','verified'])->group(function(){
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
Route::get('/counter', Counter::class);

Route::controller(SaleController::class)->group(function () {
    Route::get('/product/', 'productIndex')->name('product.index');
});

Route::controller(ComputerController::class)->group(function () {
    Route::get('/computer/', 'computerIndex')->name('computer.index');
    Route::get('/windows/', 'windowsIndex')->name('computer.windows.index');
});

Route::controller(AssetController::class)->group(function () {
    Route::get('/asset/', 'assetIndex')->name('asset.index');
});

Route::controller(MachineryController::class)->group(function () {
    Route::get('/machinery/', 'index')->name('machinery.index');
    Route::get('/machinery/report/{machineryId}', 'reportIndex')->name('report-machinery.index');
    Route::get('/machinery/list/{sparepartId}', 'listIndex')->name('list-machinery.index');
});

