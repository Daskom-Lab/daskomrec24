<?php

use App\Http\Middleware\isCaas;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaasController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\DataCaasController;
use App\Http\Controllers\PlottingController;
use App\Http\Controllers\DataAdminController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Auth\CaasLoginController;
use App\Http\Controllers\Auth\AdminLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('caas.login');
})->middleware('guest:caas', 'guest:admin');

//admin login
Route::controller(AdminLoginController::class)->prefix('auth')->group(function () {
    Route::get('/loginAdmin', 'loginForm')->name('admin.login')->middleware('guest:caas', 'guest:admin');
    Route::post('/loginAdmin', 'loginCheck')->name('admin.login.check')->middleware('guest:caas', 'guest:admin');
});

// admin routes
Route::middleware([isAdmin::class])->prefix('management')->group(function () {

    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('/logout', 'logout')->name('admin.logout');
        Route::post('/set-admin/{id}', 'changePass')->name('admin.set.pass');
    });

    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
        Route::post('/setStatus', 'setStatus')->name('admin.setStatus');
        Route::post('/setMsg', 'setMsg')->name('admin.setMsg');
        Route::get('/reset-shift', 'resetShift')->name('admin.resetShift');
        Route::get('/reset-plot', 'resetPlot')->name('admin.resetPlot');
    });

    Route::controller(DataCaasController::class)->group(function () {
        Route::get('/list-caas', 'index')->name('admin.datacaas');
        Route::post('/create-caas', 'create')->name('admin.create.caas');
        Route::post('/import-caas', 'storeImport')->name('admin.import.caas');
        Route::post('/set-caas', 'setCaas')->name('admin.set.caas');
        Route::post('/update-caas/{id}', 'update')->name('admin.update.caas');
        Route::post('/delete-caas/{id}', 'destroy')->name('admin.delete.caas');
    });

    Route::controller(DataAdminController::class)->group(function () {
        Route::get('/sneaky-admin', 'index')->name('admin.admins');
        Route::post('/create-admin', 'create')->name('admin.create.admin');
        Route::post('/set-admin', 'setAdmin')->name('admin.set.admin');
        Route::post('/update-admin/{id}', 'update')->name('admin.update.admin');
        Route::post('/delete-admin/{id}', 'destroy')->name('admin.delete.admin');
    });

    Route::controller(ShiftController::class)->group(function () {
        Route::get('/list-shift', 'index')->name('admin.shifts');
        Route::post('/create-shift', 'create')->name('admin.create.shift');
        Route::post('/update-shift/{id}', 'update')->name('admin.update.shift');
        Route::post('/delete-shift/{id}', 'destroy')->name('admin.delete.shift');
    });

    Route::controller(PlottingController::class)->group(function () {
        Route::get('/list-plot', 'index')->name('admin.plots');
    });

    Route::controller(RolesController::class)->group(function () {
        Route::get('/list-role', 'index')->name('admin.role');
        Route::post('/update-role/{id}', 'update')->name('admin.update.role');
    });


});




//caas login
Route::controller(CaasLoginController::class)->group(function () {
    Route::get('/loginCaas', 'loginForm')->name('caas.login')->middleware('guest:caas', 'guest:admin');
    Route::post('/loginCaas', 'loginCheck')->name('caas.login.check')->middleware('guest:caas', 'guest:admin');
});
// caas routes
Route::middleware([isCaas::class])->group(function () {

    Route::controller(CaasLoginController::class)->group(function () {
        Route::get('/logout', 'logout')->name('caas.logout');
    });

    Route::controller(CaasController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('caas.dashboard');
    });


});

Route::fallback(function () {
    return redirect('/');
})->middleware(RedirectIfAuthenticated::class);