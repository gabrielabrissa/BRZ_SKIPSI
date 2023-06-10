<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AturPemberitahuanController;
use App\Http\Controllers\AturLimitController;
use App\Http\Controllers\AturUserController;
use App\Http\Controllers\DataTTFController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\InputTTFController;
use App\Http\Controllers\KuotaHarianSupController;
use App\Http\Controllers\LaporanTTFController;
use App\Http\Controllers\MonitoringFileController;


// Route::get('/index2', function () {return view('welcome');});
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

/*user*/
Route::group(['middleware' => ['supplier']], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/home/jk', [HomeController::class, 'downloadJK']);
    Route::get('/inputttf', [InputTTFController::class, 'inputttf']);
    Route::get('/inputttf/pilihcabang/{id2}', [InputTTFController::class, 'pilihCabang'])->name('inputttf.pilihCabang');
    // Route::post('/inputttf', [InputTTFController::class, 'simpan_bpb2']);
    Route::get('/download', [DownloadController::class, 'download']);

    Route::get('/get-sys-supp-site', [InputTTFController::class, 'getSysSuppSite']);
    Route::get('/get-ttf-data-bpb', [InputTTFController::class, 'getTtfDataBpb']);
});

/*admin*/
Route::group(['middleware' => ['admin']], function () {
    Route::get('/homeadmin', [HomeController::class, 'indexadmin']);
    Route::get('/homeadmin/jk', [HomeController::class, 'downloadJK']);
    Route::get('/aturlimit', [AturLimitController::class, 'aturlimit']);
    Route::get('/aturuser', [AturUserController::class, 'aturuser']);
    Route::get('/aturuser/adduser', [AturUserController::class, 'adduser']);
    Route::get('/datattf', [DataTTFController::class, 'datattf']);
    Route::get('/datasup', [DataTTFController::class, 'datasup']);
    Route::get('/datalampfp', [DataTTFController::class, 'datalampfp']);
    Route::get('/kuotaharian', [KuotaHarianSupController::class, 'kuotaharian']);
    Route::get('/laporanttf', [LaporanTTFController::class, 'laporanttf']);
    Route::get('/monitoringfp', [MonitoringFileController::class, 'monitoringfp']);
    Route::get('/aturpemberitahuan', [AturPemberitahuanController::class, 'aturpemberitahuan']);
    Route::post('/aturpemberitahuan/save_pemberitahuan', [AturPemberitahuanController::class, 'save_pemberitahuan']);
    Route::get('/downloadadmin', [DownloadController::class, 'downloadadmin']);
});
