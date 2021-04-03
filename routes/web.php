<?php

use App\Models\Department;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HierarchyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PDFController;
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
    return redirect(\route('report.create'));
});
Route::resource('hierarchy', HierarchyController::class);
Route::resource('report', ReportController::class);
Route::get('/reportpdf/{id}', [PDFController::class ,'generatePDF'])->name('getpdf');
Route::get('/godown_report/{id}', [PDFController::class ,'godown_maintenance_pdf'])->name('godown_report');
Route::get('/report/create/step2/{id}', [ReportController::class, 'step2show'])->name('step2show');
Route::get('/report/create/dbinfo/{id}', [ReportController::class, 'inputdbinfo'])->name('inputdbinfo');
Route::post('/report/create/dbinfo/{id}', [ReportController::class, 'inputdbinfostore'])->name('dbpoint.store');
Route::get('/report/create/areareview/{id}', [ReportController::class, 'areareview'])->name('areareview');
Route::post('/report/create/areareview/{id}', [ReportController::class, 'areareviewstore'])->name('areareview.store');
Route::get('/report/create/marketwork/{id}', [ReportController::class, 'marketwork'])->name('marketwork');
Route::post('/report/create/marketwork/{id}', [ReportController::class, 'marketworkstore'])->name('marketwork.store');
Route::get('/report/create/agreedaction/{id}', [ReportController::class, 'agreedaction'])->name('agreedaction');
Route::post('/report/create/agreedaction/{id}', [ReportController::class, 'agreedactionstore'])->name('agreedaction.store');
Route::get('/report/create/godown/{id}', [ReportController::class, 'godown'])->name('godown');
Route::post('/report/create/godown/{id}', [ReportController::class, 'godownstore'])->name('godown.store');
Route::post('/report/create/step2/{id}', [ReportController::class, 'step2spostore'])->name('spo.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
