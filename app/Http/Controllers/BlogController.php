<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function sistemInventory()
    {
        return view('blog.sistem-inventory', [
            'metaTitle' => 'Sistem Inventory: Kelola Stok Secara Efisien | ITInventoryBeacukai.com',
            'metaDescription' => 'Optimalkan pengelolaan stok dan barang Anda dengan sistem inventory yang terintegrasi.',
        ]);
    }

    public function kawasanBerikat()
    {
        return view('blog.kawasan-berikat', [
            'metaTitle' => 'Kawasan Berikat: Insentif untuk Perusahaan Ekspor | ITInventoryBeacukai.com',
            'metaDescription' => 'Ketahui keuntungan kawasan berikat bagi perusahaan manufaktur dan ekspor di Indonesia.',
        ]);
    }

    public function beaCukai()
    {
        return view('blog.beacukai', [
            'metaTitle' => 'Bea Cukai: Informasi Penting untuk Pengusaha | ITInventoryBeacukai.com',
            'metaDescription' => 'Pelajari peran Bea Cukai dalam mendukung perdagangan internasional dan logistik nasional.',
        ]);
    }

    public function pelaporanBc27()
    {
        return view('blog.pelaporan-bc27', [
            'metaTitle' => 'Pelaporan BC 2.7: Panduan Lengkap untuk Perusahaan | ITInventoryBeacukai.com',
            'metaDescription' => 'Panduan pelaporan dokumen BC 2.7 untuk memudahkan kepatuhan terhadap regulasi kepabeanan.',
        ]);
    }

    public function itInventory()
    {
        return view('blog.it-inventory', [
            'metaTitle' => 'IT Inventory: Solusi Digital untuk Gudang Anda | ITInventoryBeacukai.com',
            'metaDescription' => 'Manfaatkan teknologi informasi untuk mengelola persediaan dengan akurat dan efisien.',
        ]);
    }

    public function otomasiLogistik()
    {
        return view('blog.otomasi-logistik', [
            'metaTitle' => 'Otomasi Logistik: Tingkatkan Produktivitas Gudang | ITInventoryBeacukai.com',
            'metaDescription' => 'Pelajari bagaimana otomasi dalam logistik membantu mempercepat proses bisnis Anda.',
        ]);
    }

    public function erp()
    {
        return view('blog.erp', [
            'metaTitle' => 'ERP: Integrasi Sistem untuk Efisiensi Bisnis | ITInventoryBeacukai.com',
            'metaDescription' => 'Solusi ERP untuk menyatukan manajemen keuangan, logistik, dan operasional dalam satu sistem.',
        ]);
    }

    public function pengawasanBarang()
    {
        return view('blog.pengawasan-barang', [
            'metaTitle' => 'Pengawasan Barang: Kepatuhan dan Keamanan Logistik | ITInventoryBeacukai.com',
            'metaDescription' => 'Tingkatkan pengawasan barang masuk dan keluar untuk menghindari pelanggaran kepabeanan.',
        ]);
    }

    public function sistemGudang()
    {
        return view('blog.sistem-gudang', [
            'metaTitle' => 'Sistem Gudang: Optimalkan Ruang dan Proses | ITInventoryBeacukai.com',
            'metaDescription' => 'Sistem manajemen gudang modern untuk efisiensi ruang, waktu, dan tenaga kerja.',
        ]);
    }

    public function solusiBisnisIndonesia()
    {
        return view('blog.solusi-bisnis-indonesia', [
            'metaTitle' => 'Solusi Bisnis Indonesia: Teknologi untuk Tumbuh Bersama | ITInventoryBeacukai.com',
            'metaDescription' => 'Dukung pertumbuhan usaha Anda dengan solusi digital dan logistik dari Indonesia.',
        ]);
    }

}
