<?php

use App\Livewire\Counter;
use App\Events\NotifyProcessed;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssetController;
use App\Livewire\Pro\ReportMachineryIndex;
use App\Http\Controllers\CAR\CarController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\IT\RepairController;
use App\Http\Controllers\CAR\ReportCarController;
use App\Http\Controllers\PRO\MachineryController;
use App\Http\Controllers\RPO\DashboardPalmPurchase;
use App\Http\Controllers\GM\DashboardPalmController;
use App\Http\Controllers\Technician\MachineryReportController;

Route::group(['middleware' => ['role:developer|admin']], function () {
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
Route::get('template', [App\Http\Controllers\HomeController::class, 'templateIndex'])->name('template');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
});
Route::view('/pusher1','pusher1');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Auth::routes();

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/pdf', [PDFController::class, 'index'])->name('pdf.index');



Route::get('/counter', Counter::class);

Route::group(['middleware' => ['role:developer|admin']], function () {
    Route::controller(ComputerController::class)->group(function () {
        Route::get('/computer/', 'computerIndex')->name('computer.index');
        Route::get('/windows/', 'windowsIndex')->name('computer.windows.index');
    });

    Route::controller(AssetController::class)->group(function () {
        Route::get('/asset/', 'assetIndex')->name('asset.index');
    });
});





Route::group(['middleware' => ['role:developer|admin|admin-PRO']], function () {
    Route::controller(SaleController::class)->group(function () {
        Route::get('/product/', 'productIndex')->name('product.index');
    });
    // Route::controller(MachineryController::class)->group(function () {
    //     Route::get('/machinery/', 'index')->name('machinery.index');
    //     Route::get('/machinery/report/{machineryId}', 'reportIndex')->name('report-machinery.index');
    //     Route::get('/machinery/list/{sparepartId}', 'listIndex')->name('list-machinery.index');
    // });

});

Route::group(['middleware' => ['role:developer|admin|GM|MD']], function () {
    Route::controller(DashboardPalmController::class)->group(function () {
        Route::get('/dashboard-palm/', 'index')->name('dashboard-palm.index');
    });
});

Route::group(['middleware' => ['role:developer|admin|admin-RPO|MD']], function () {
    Route::controller(DashboardPalmPurchase::class)->group(function () {
        Route::get('/dashboard-palm-purchase/', 'index')->name('dashboard-palm-purchase.index');
    });
});






Route::controller(RepairController::class)->group(function () {
    Route::get('/report-repair/', 'index')->name('report-repair.index');
    Route::get('/api/data', [App\Livewire\IT\RepairIndex::class, 'getData'])->name('getData');
});

Route::controller(CarController::class)->group(function () {
    Route::get('/car-report/', 'index')->name('car-report.index');
    Route::get('/car-character/', 'characterIndex')->name('car-character.index');
    Route::get('/car-type/', 'typeIndex')->name('car-type.index');
    Route::get('/car-view/{carReportId}', 'viewIndex')->name('car-view.index');
});


Route::controller(MachineryReportController::class)->group(function () {
    Route::get('/machinery/', 'index')->name('machinery.index');
    Route::get('/machinery/report/{machineryId}', 'reportIndex')->name('machinery-report.index');
    Route::get('/machinery/spare-part/{sparePartId}', 'sparePartIndex')->name('spare-part.index');
});

