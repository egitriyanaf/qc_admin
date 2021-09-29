<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterProduksiController;

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
    return view('home');
});
Route::get('/report', function () {
    return view('report');
});
Route::get('/detail_defect', function () {
    return view('detail_defect');
});
Route::get('/detail_inspection', function () {
    return view('detail_inspection');
});

Route::prefix('/mstproduksi')->group(function () {
    Route::get('', [MasterProduksiController::class, 'index'])->name('masterproduksi');
    Route::get('/datatable', [MasterProduksiController::class, 'datajson_masterproduksi'])->name('json_masterproduksi');
});
