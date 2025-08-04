<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use App\Services\ArtikelServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    //

    protected $artikelServices;
    public function __construct(ArtikelServices $artikelServices)
    {
        $this->artikelServices = $artikelServices;
    }

    public function index(){
        $resp = $this->artikelServices->fetchIndex();

        return view('pages.artikel.index', [
            'data' => $resp['data'],
        ]);
    }

    public function detailArtikel($slug)
    {
        $resp = $this->artikelServices->fetchDetail($slug);

        if ($resp['status'] != 'success') {
            return redirect()->back();
        }

        $data = $resp['data'];
        $content = $data['content'] ?? '';
        $maxWords = 900;

        // ====== META DESCRIPTION ======
        $text = strip_tags($content);
        $words = preg_split('/\s+/', $text);
        $limitedWords = array_slice($words, 0, $maxWords);
        $descriptionText = implode(' ', $limitedWords);
        $description = Str::limit(trim($descriptionText), 160, '');

        // ====== META KEYWORDS ======
        $stopwords = [
            'dan', 'yang', 'untuk', 'dengan', 'atau', 'dari', 'pada', 'ini', 'itu', 'adalah',
            'sebagai', 'ke', 'di', 'dalam', 'oleh', 'akan', 'karena', 'juga', 'agar', 'maka',
            'sudah', 'belum', 'tidak', 'bisa', 'harus', 'lebih', 'kurang', 'namun', 'meskipun', 'secara', 'dapat', 'memungkinkan', 'menjadi', 'bahwa', 'mereka', 'penting', 'tetap', 'lanjut', 'terhadap', 'tepat', 'seperti', 'keseluruhan', 'meningkatkan', 'banyak', 'semakin', 'bagaimana', 'mengelola', 'berbagai', 'berlaku', 'solusi', 'anggota', 'dirancang', 'fitur', 'jarak', 'membantu', 'antara', 'terstruktur', 'setiap', 'melacak', 'memiliki', 'mengurangi', 'pasar', 'proses', 'sangat', 'memahami', 'pelaku', 'menguntungkan', 'pelaku', 'biaya', 'keterangan', 'hingga', 'pengurangan', 'kemudian', 'indonesia', 'kendala', 'jangkauan', 'manfaat', 'didapat', 'barangmanfaat', 'mengalami', 'mulai', 'memperluas', 'dibutuhkan', 'masuk', 'beberapa', 'signifikan', 'khusus', 'diperlukan', 'serta', 'telah', 'terkait', 'sehingga', 'keberhasilan', 'negara', 'negeri', 'adanya', 'ada', 'pilihan', 'efisien', 'pengaturan', 'menjadikannya', 'lancarselain', 'berjalan', 'npusat', 'memastikan', 'memberikan', 'ingin', 'populer', 'terkendali', 'tersedia', 'penghematan', 'tinggi', 'hanya', 'tetapi', 'kesalahan', 'menawarkan', 'dilakukan', 'sektor', 'hari', 'sehari-hari', 'mempercepat', 'keunggulan', 'barangsolusi'
        ];

        $industryTerms = [
            'sistem IT inventory', 'integrasi IT inventory', 'inventory gudang berikat', 'sistem pelacakan barang',
            'kepatuhan bea cukai', 'pengawasan berbasis sistem', 'modul inventory bea cukai',
            'sistem logistik terintegrasi', 'barang kena cukai', 'data real-time inventory',
            'audit kepabeanan', 'laporan harian gudang', 'monitoring stok barang',
            'sistem otomatisasi gudang', 'pengeluaran barang', 'barang masuk keluar', 
            'API inventory bea cukai', 'standar DJBC', 'sinkronisasi PLB', 'warehouse management system'
        ];

        $plainText = strtolower(strip_tags($content));
        $foundIndustryTerms = array_filter($industryTerms, fn($term) => str_contains($plainText, $term));

        $words = preg_split('/\s+/', $plainText);
        $limitedWords = array_slice($words, 0, $maxWords);

        $filteredWords = array_filter(array_map(function ($word) use ($stopwords) {
            $clean = trim(preg_replace('/[^a-z0-9-]/', '', $word));
            return (!in_array($clean, $stopwords) && strlen($clean) > 4) ? $clean : null;
        }, $limitedWords));

        $wordCounts = array_count_values($filteredWords);
        arsort($wordCounts);
        $autoKeywords = array_slice(array_keys($wordCounts), 0, 10);

        $keywordsfix = implode(', ', array_unique(array_merge($foundIndustryTerms, $autoKeywords)));

        // ====== RETURN VIEW ======
        return view('pages.artikel.detail', [
            'slug' => $slug,
            'data' => $data,
            'meta_description' => $description,
            'meta_keywords' => $keywordsfix,
        ]);
    }
    
}
