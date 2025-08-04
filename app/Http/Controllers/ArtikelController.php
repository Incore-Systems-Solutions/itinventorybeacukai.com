<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use App\Services\ArtikelServices;
use Illuminate\Http\Request;

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
        // $data = Artikel::with('category', 'relatedArtikel', 'relatedArtikel.artikel')->where('slug', $slug)->first();

        // dd($resp);
        if($resp['status'] != 'success'){
            return redirect()->back();
        }
        return view('pages.artikel.detail', ['slug' => $slug, 'data' => $resp['data']]);
    }
    
}
