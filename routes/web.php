<?php

use App\Http\Controllers\PasarController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\RiwayatKepemilikan;
use App\Http\Controllers\RiwayatKepemilikanController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatIuranController;
use App\Http\Controllers\ProfileController;

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
    return redirect('/pasar');
});

Route::get('/pasar', [PasarController::class, 'index']);
Route::post('/pasar', [PasarController::class, 'store']);
Route::get('/pasar/create', [PasarController::class, 'create']);
Route::get('/pasar/{pasar}/edit', [PasarController::class, 'edit']);
Route::put('/pasar/{pasar}', [PasarController::class, 'update']);
Route::get('/pasar/{pasar}/delete', [PasarController::class, 'destroy']);
Route::get('/pasar/{pasar}/view', [PasarController::class, 'info']);

// bagian tenant
Route::get('/tenant', [TenantController::class, 'index']);
Route::post('/tenant', [TenantController::class, 'store']);
Route::get('/tenant/create', [TenantController::class, 'create']);
Route::get('/tenant/{tenant}/edit', [TenantController::class, 'edit']);
Route::put('/tenant/{tenant}', [TenantController::class, 'update']);
Route::get('/tenant/{tenant}/delete', [TenantController::class, 'destroy']);
Route::get('/tenant/{tenant}/view', [TenantController::class, 'info']);

// bagian pemilik
Route::get('/pemilik', [PemilikController::class, 'index']);
Route::post('/pemilik', [PemilikController::class, 'store']);
Route::get('/pemilik/create', [PemilikController::class, 'create']);
Route::get('/pemilik/{pemilik}/edit', [PemilikController::class, 'edit']);
Route::put('/pemilik/{pemilik}', [PemilikController::class, 'update']);
Route::get('/pemilik/{pemilik}/view', [PemilikController::class, 'view']);
Route::get('/pemilik/{pemilik}/delete', [PemilikController::class, 'destroy']);

// bagian pengelola
Route::get('/pengelola', [PengelolaController::class, 'index']);
Route::post('/pengelola', [PengelolaController::class, 'store']);
Route::get('/pengelola/create', [PengelolaController::class, 'create']);
Route::get('/pengelola/{pengelola}/edit', [PengelolaController::class, 'edit']);
Route::put('/pengelola/{pengelola}', [PengelolaController::class, 'update']);
Route::get('/pengelola/{pengelola}/delete', [PengelolaController::class, 'destroy']);
Route::get('/pengelola/{pengelola}/view', [PengelolaController::class, 'info']);

Route::get('/modals', function () {
   return view('modals', [
    "active" => ""
   ]);
});

Route::get('/riwayat-kepemilikan', [RiwayatKepemilikanController::class, 'index']);
Route::get('/riwayat-kepemilikan/{tenant}/create', [TenantController::class, 'createKepemilikan']);
Route::put('/riwayat-kepemilikan/{kepemilikan}', [RiwayatKepemilikanController::class, 'update']);
Route::get('/riwayat-kepemilikan/{kepemilikan}/view', [RiwayatKepemilikanController::class, 'info']);

Route::get('/riwayat-iuran', [RiwayatIuranController::class, 'index']);
Route::get('/riwayat-iuran/{tenant}/create', [TenantController::class, 'createIuran']);
Route::post('/riwayat-iuran', [RiwayatIuranController::class, 'store']);
Route::get('/riwayat-iuran/{iuran}/view', [RiwayatIuranController::class, 'info']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pasar/cetak-pasar', [PasarController::class, 'cetakPasarAll']);
Route::get('/pasar/{pasar}/cetak-pasar', [PasarController::class, 'cetakPasarSingle']);
Route::get('/pengelola/cetak-pengelola', [PengelolaController::class, 'cetakPengelolaAll']);
Route::get('/tenant/cetak-tenant', [TenantController::class, 'cetakTenantAll']);
Route::get('/tenant/{tenant}/cetak-tenant', [TenantController::class, 'cetakTenantSingle']);
Route::get('/pemilik/cetak-pemilik', [PemilikController::class, 'cetakPemilikAll']);
Route::get('/pemilik/{pemilik}/cetak-pemilik', [PemilikController::class, 'cetakPemilikSingle']);
Route::get('/riwayat-kepemilikan/cetak-riwayat-kepemilikan', [RiwayatKepemilikanController::class, 'cetakRiwayatAll']);

Route::group(array('prefix'=>'user'), function(){
    Route::get('profile/{id}', [ProfileController::class, 'view']);
    Route::get('profile/{id}/edit', [ProfileController::class, 'edit']);
    Route::put('profile/{id}/update', [ProfileController::class, 'update']);
    Route::post('profile', [ProfileController::class, 'store']);
});
