<?php

namespace App\Services;

use App\Core\AiApi;
use App\Models\Artikel;
use App\Models\Category;
use App\Models\RelatedArtikel;
use Illuminate\Support\Str;


class ArtikelServices
{
    
    public function fetchIndex(){
        $api = new AiApi();
        $response = $api->get('/api/subdomain/itinventorybeacukai.com', []);

        // dd($response);
        return $response;
    }

    public function fetchDetail($slug){
        $api = new AiApi();
        $response = $api->get('/api/artikel/'.$slug, []);

        return $response;
    }
}