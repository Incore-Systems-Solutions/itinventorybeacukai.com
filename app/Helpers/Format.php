<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Format
{
    public static function meta($text)
    {
        $metaTags = [];

        // Parse <meta> tags
        $pattern = '/<meta\s+(?:name|property)="([^"]+)"\s+content="([^"]+)">/';
        preg_match_all($pattern, $text, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $metaTags[] = '<meta name="' . htmlspecialchars($match[1]) . '" content="' . htmlspecialchars($match[2]) . '">';
        }

        // Parse <title> tag
        if (preg_match('/<title>(.*?)<\/title>/', $text, $titleMatch)) {
            array_unshift($metaTags, '<title>' . htmlspecialchars($titleMatch[1]) . '</title>');
        }

        // Return meta tags as a single string
        return implode("\n", $metaTags);
    }

        public static function getSubdomain()
    {
        try {
            
            // curl ssl false
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://blog.indonesiacore.com/api/domain/5",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_SSL_VERIFYPEER => false,
            ]);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
    
            if ($err) {
                return [];
            }
    
            $response = json_decode($response, true);
    
            // dd($response);
    
            return $response['data'] ?? [];
        } catch (\Exception $e) {
            // dd($e);
            // \Log::error("Error getting subdomain: " . $e->getMessage());
            return null;
        }
    }

    public static function getCachedMeta(?string $targetUrl = null)
    {
        // Jika tidak diberikan URL, pakai URL saat ini
        // $targetUrl = $targetUrl ?? Request::fullUrl();
        // $targetUrl = 'https://www.digimar.id';
        $targetUrl = "https://itinventorybeacukai.com/";

        // dd($targetUrl);
        if (!filter_var($targetUrl, FILTER_VALIDATE_URL)) {
            return null;
        }

        // Buat cache key dari md5 URL
        $cacheKey = 'meta_' . md5($targetUrl);

        return Cache::remember($cacheKey, now()->addHours(6), function () use ($targetUrl) {
            $response = Http::withoutVerifying()
            ->withHeaders([
                'Accept' => 'application/json',
                'x-api-key' => 'sk-5d8a894adea243f88c850e9ea72a393d'
            ])
            ->get('https://blog.indonesiacore.com/api/meta-domains', [
                'url' => $targetUrl,
            ]);

            // dd($response->json());

            if ($response->successful() && $response->json('status')) {
                return $response->json('data');
            }

            return null;
        });
    }
}