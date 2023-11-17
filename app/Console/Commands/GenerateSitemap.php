<?php

namespace App\Console\Commands;

use App\Services\SitemapService;
use Illuminate\Console\Command;


class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(SitemapService $sitemapService)
    {
        $sitemap = $sitemapService->generateSitemap();
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
