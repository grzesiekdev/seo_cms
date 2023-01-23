<?php

namespace App\Service;

use App\Repository\PageRepository;
use JetBrains\PhpStorm\NoReturn;

class SitemapGenerator
{
    private PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    #[NoReturn]
 public function generateSitemap(): void
 {
     $pages = $this->pageRepository->findAll();
     $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
     foreach ($pages as $page) {
         $sitemap .= "
            <url>
            <loc>{$_SERVER['HTTP_HOST']}/{$page->getSlug()}</loc>
            <lastmod>{$page->getCreationDate()->format('Y-m-d')}</lastmod>
            </url>
            ";
     }
     $sitemap .= '
        </urlset>
        ';

     $sitemapFile = fopen('../public/sitemap.xml', 'w+') or exit('Unable to open file!');
     fwrite($sitemapFile, $sitemap);
     fclose($sitemapFile);
 }
}
