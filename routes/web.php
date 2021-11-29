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
})->middleware(['auth', 'verified'])
->name('reportes');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
})->name('dashboard');

Route::name('reportes.')->prefix('reportes')->group(function () {
    Route::get('lins_report',[ReportController::class,'libs_report'])->name('libs_report');
});

require __DIR__.'/auth.php';
