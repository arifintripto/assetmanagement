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
    return view('dashboard.pages.dashboard.index');
});
Route::resource('hierarchy', HierarchyController::class);
Route::resource('report', ReportController::class);
Route::get('report/create/dbpoint/{id}', [ReportController::class, '']);
Route::get('/reportpdf', [PDFController::class ,'generatePDF']);
Route::get('/getspos/{parent_code}', [ReportController::class, 'getSpoList']);
Route::get('/getsposdynamic/{parent_code}', [ReportController::class, 'fetch'])->name('getsposdynamic.fetch');

//Route::get('upload_tab_csv', [AlltabsController::class ,'create']);
//Route::post('upload_tab_csv', [AlltabsController::class ,'store']);
//Route::get('alltabs', [AlltabsController::class ,'index']);
//Route::get('feedtabsdata', [AlltabsController::class ,'index']);
//Route::get('feedtabsdata', [TabController::class ,'alltabsToTab']);
//
//Route::resource('department', DepartmentController::class);
//Route::resource('employee', EmployeeController::class);
//Route::resource('markethierarchy', MarketHierarchyController::class);
//
//



//Route::get('/test',function(){
//    $create_csv_folder = File::makeDirectory(base_path().'/resources/csv');
//    $create_tab_csv_folder = File::makeDirectory(base_path().'/resources/csv/tab_csv');
//    $result = File::isDirectory(base_path().'/resources/csv/tab_csv');
//    dd($result);

    // return true if folder created
//});
