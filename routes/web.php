<?php

use App\Http\Controllers\BarangController;
  use App\Http\Controllers\HomeController;
  use App\Http\Controllers\PenjualanController;
  use App\Http\Controllers\ProductController;
 use App\Http\Controllers\LevelController;
 use App\Http\Controllers\KategoriController;
 //use App\Http\Controllers\UserController;
 //use App\Http\Controllers\UserController;
 use App\Http\Controllers\WelcomeController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\SupplierController;

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
Route::group(['prefix' => 'level'], function () {
 

    Route::get('/', [LevelController::class, 'index']); // Menampilkan halaman awal level
 

    Route::post('/list', [LevelController::class, 'list']); // Menampilkan data level dalam bentuk JSON untuk DataTables
 

    Route::get('/create', [LevelController::class, 'create']); // Menampilkan halaman form tambah level
 

    Route::post('/', [LevelController::class, 'store']); // Menyimpan data level baru
 

    Route::get('/{id}', [LevelController::class, 'show']); // Menampilkan detail level
 

    Route::get('/{id}/edit', [LevelController::class, 'edit']); // Menampilkan halaman form edit level
 

    Route::put('/{id}', [LevelController::class, 'update']); // Menyimpan perubahan data level
 

    Route::delete('/{id}', [LevelController::class, 'destroy']); // Menghapus data level
 

});
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']); // Menampilkan halaman awal Kategori
    Route::post('/list', [KategoriController::class, 'list']); // Menampilkan data[Kategori dalam bentuk JSON untuk DataTables
    Route::get('/create', [KategoriController::class, 'create']); // Menampilkan halaman form tambah[Kategori
    Route::post('/', [KategoriController::class, 'store']); // Menyimpan data[Kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']); // Menampilkan detail[Kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); // Menampilkan halaman form edit[Kategori
    Route::put('/{id}', [KategoriController::class, 'update']); // Menyimpan perubahan data[Kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // Menghapus data level
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']); // Menampilkan halaman awal Supplier
    Route::post('/list', [SupplierController::class, 'list']); // Menampilkan data[Supplier dalam bentuk JSON untuk DataTables
    Route::get('/create', [SupplierController::class, 'create']); // Menampilkan halaman form tambah[Supplier
    Route::post('/', [SupplierController::class, 'store']); // Menyimpan data[Supplier baru
    Route::get('/{id}', [SupplierController::class, 'show']); // Menampilkan detail[Supplier
    Route::get('/{id}/edit', [SupplierController::class, 'edit']); // Menampilkan halaman form edit[Supplier
    Route::put('/{id}', [SupplierController::class, 'update']); // Menyimpan perubahan data[Supplier
    Route::delete('/{id}', [SupplierController::class, 'destroy']); // Menghapus data level
});

Route::get('/', [BarangController::class, 'index']);
      Route::post('/list', [BarangController::class, 'list']);
      Route::get('/create', [BarangController::class, 'create']);
      Route::post('/', [BarangController::class, 'store']);
      Route::get('/{id}', [BarangController::class, 'show']);
      Route::get('/{id}/edit', [BarangController::class, 'edit']);
      Route::put('/{id}', [BarangController::class, 'update']);
      Route::delete('/{id}', [BarangController::class, 'destroy']);

