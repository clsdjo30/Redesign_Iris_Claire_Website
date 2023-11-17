<?php

namespace App\Services;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;

class SitemapService
{
    public function generateSitemap()
    {
        $sitemap = Sitemap::create();

        // Ajouter les routes statiques
        $sitemap->add(Url::create('/'));
        $sitemap->add(Url::create('/welcome'));
        $sitemap->add(Url::create('/team'));
        $sitemap->add(Url::create('/contact'));
        $sitemap->add(Url::create('/mentions-legales'));
        $sitemap->add(Url::create('/privacy-policy'));
        $sitemap->add(Url::create('/conditions-generales-de-ventes'));
        // autres routes statiques...


        // Ajout des URLs des posts
        $posts = Post::all();

        foreach ($posts as $post) {
            $sitemap->add(Url::create('/blog/' . $post->slug)
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.5));
        }

        // Ajouter le sitemap à un fichier public
        $sitemap->writeToFile(public_path('sitemap.xml'));


        return $sitemap;
    }
}
