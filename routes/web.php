<?php

use App\Http\Controllers\ReportController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/reportes', function () {
    return Inertia::render('Reports/ReporteBibliotecas');
})->middleware(['auth', 'verified'])->name('reportes');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::name('reportes.')->prefix('reportes')->middleware(['auth', 'verified'])->group(function () {
    Route::get('libs_report',[ReportController::class,'libs_report'])->name('libs_report');
    Route::get('libaeds_report',[ReportController::class,'libaeds_report'])->name('libaeds_report');
    Route::get('libcengage_report',[ReportController::class,'libcengage_report'])->name('libcengage_report');
    Route::get('libcimabook_report',[ReportController::class,'libcimabook_report'])->name('libcimabook_report');
    Route::get('libeureka_report',[ReportController::class,'libeureka_report'])->name('libeureka_report');
    Route::get('libeuromonitor_report',[ReportController::class,'libeuromonitor_report'])->name('libeuromonitor_report');
    Route::get('mcgrawhill_report',[ReportController::class,'mcgrawhill_report'])->name('mcgrawhill_report');
});

require __DIR__.'/auth.php';
