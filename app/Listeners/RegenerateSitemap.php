<?php

namespace App\Listeners;

use App\Events\PostUpdated;
use App\Services\SitemapService;

class RegenerateSitemap
{
    protected $sitemapService;

    public function __construct(SitemapService $sitemapService)
    {
        $this->sitemapService = $sitemapService;
    }

    public function handle(PostUpdated $event)
    {
        $sitemap = $this->sitemapService->generateSitemap();
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
