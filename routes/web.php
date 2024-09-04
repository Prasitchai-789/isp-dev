<?php

use App\Livewire\Counter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\CAR\ReportCarController;
use App\Livewire\Pro\ReportMachineryIndex;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\GM\DashboardPalmController;
use App\Http\Controllers\IT\RepairController;
use App\Http\Controllers\PRO\MachineryController;
use App\Http\Controllers\RPO\DashboardPalmPurchase;

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

Route::get('/login16', function () {
    return view('login16');
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

Route::controller(DashboardPalmPurchase::class)->group(function () {
    Route::get('/dashboard-palm-purchase/', 'index')->name('dashboard-palm-purchase.index');
});

Route::controller(DashboardPalmController::class)->group(function () {
    Route::get('/dashboard-palm/', 'index')->name('dashboard-palm.index');
});

Route::controller(RepairController::class)->group(function () {
    Route::get('/report-repair/', 'index')->name('report-repair.index');
    Route::get('/api/data',[App\Livewire\IT\RepairIndex::class,'getData'])->name('getData');
});

Route::controller(ReportCarController::class)->group(function () {
    Route::get('/report-car/', 'index')->name('report-car.index');
    Route::get('/character-car/', 'characterIndex')->name('character-car.index');
    Route::get('/type-car/', 'typeIndex')->name('type-car.index');
});

