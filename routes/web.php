<?php

use App\Http\Controllers\ArtikelController;
use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/',[ArtikelController::class, 'index']);
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'id', 'zh', 'ar'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    app()->setLocale($locale);
    return redirect()->back();
});
Route::get('/artikel/{slug}',[ArtikelController::class, 'detailArtikel']);
Route::get('/category/{slug}',[ArtikelController::class, 'categoryArtikel']);


Route::get('generate/artikel', [ArtikelController::class, 'generateArtikel']);
Route::get('generate/artikel-image', [ArtikelController::class, 'generateArtikelImage']);
Route::get('kontak-kami', function () {
    return view('pages.kontak-kami.contact');
});
Route::get('konsultan', function () {
    return view('pages.kontak-kami.index');
});

Route::get('sitemap', function () {
    return response()->file(public_path('sitemap.xml'));
});

Route::get('/sistem-inventory', [BlogController::class, 'sistemInventory']);
Route::get('/kawasan-berikat', [BlogController::class, 'kawasanBerikat']);
Route::get('/beacukai', [BlogController::class, 'beaCukai']);
Route::get('/pelaporan-bc27', [BlogController::class, 'pelaporanBc27']);
Route::get('/it-inventory', [BlogController::class, 'itInventory']);
Route::get('/otomasi-logistik', [BlogController::class, 'otomasiLogistik']);
Route::get('/erp', [BlogController::class, 'erp']);
Route::get('/pengawasan-barang', [BlogController::class, 'pengawasanBarang']);
Route::get('/sistem-gudang', [BlogController::class, 'sistemGudang']);
Route::get('/solusi-bisnis-indonesia', [BlogController::class, 'solusiBisnisIndonesia']);