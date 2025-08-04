<?php

namespace App\Console\Commands;

use App\Services\ArtikelServices;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml from API data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $artikelServices;
    public function __construct(ArtikelServices $artikelServices)
    {
        parent::__construct();
        $this->artikelServices = $artikelServices;
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = $this->artikelServices->fetchIndex();
        $articles = $response["data"];

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($articles as $article) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>https://' . htmlspecialchars($article["subdomain"]["name_subdomain"] . '/artikel/' . $article["slug"]) . '</loc>';
            $sitemap .= '<lastmod>' . date("Y-m-d", strtotime($article["updated_at"])) . '</lastmod>';
            $sitemap .= '<changefreq>weekly</changefreq>';
            $sitemap .= '<priority>0.8</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        $filePath = public_path('sitemap.xml');  
        file_put_contents($filePath, $sitemap);  


        $this->info('Sitemap generated successfully!');
    }
}
