<?php

use App\Http\Controllers\UkmController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'ukm'], function () {
    Route::get('/', [UkmController::class, 'index'])->name('ukm.index');           //Menampilkan halaman awal UKM
    Route::post('/list', [UkmController::class, 'list']);       //Menampilkan data UKM dalam bentuk json untuk datatables
    Route::get('/create', [UkmController::class, 'create']);    //Menampilkan halaman form tambah UKM
    Route::post('/', [UkmController::class, 'store']);          //Menyimpan data UKM baru
    Route::get('/{id}', [UkmController::class, 'show']);        //Menampilkan detail UKM
    Route::get('/{id}/edit', [UkmController::class, 'edit']);   //Menampilkan halaman form edit UKM
    Route::put('/{id}', [UkmController::class, 'update']);      //Menyimpan perubahan data UKM
    Route::delete('/{id}', [UkmController::class, 'destroy']);  //Menghapus data UKM
});

Route::group(['prefix' => 'kegiatan'], function () {
    Route::get('/', [KegiatanController::class, 'index']);          //Menampilkan halaman awal kegiatan UKM
    Route::post('/list', [KegiatanController::class, 'list']);      //Menampilkan data kegiatan UKM dalam bentuk json untuk datatables
    Route::get('/create', [KegiatanController::class, 'create']);   //Menampilkan halaman form tambah kegiatan UKM
    Route::post('/', [KegiatanController::class, 'store']);         //Menyimpan data kegiatan UKM baru
    Route::get('/{id}', [KegiatanController::class, 'show']);       //Menampilkan detail kegiatan UKM  
    Route::get('/{id}/edit', [KegiatanController::class, 'edit']);  //Menampilkan halaman form edit kegiatan UKM
    Route::put('/{id}', [KegiatanController::class, 'update']);     //Menyimpan perubahan data kegiatan UKMRoute::delete('/{id}', [KegiatanController::class, 'destroy']); //Menghapus data kegiatan UKM
});