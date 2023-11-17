<?php

namespace App\Http\Controllers;

use App\Services\SitemapService;



class SitemapController extends Controller
{
    public function index(SitemapService $sitemapService)
    {
        $sitemap = $sitemapService->generateSitemap();
        $sitemap->writeToFile(public_path('sitemap.xml'));
        return redirect('sitemap.xml');
    }
}

