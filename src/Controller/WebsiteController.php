<?php

namespace App\Controller;

use App\Repository\MenuPagesRepository;
use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(PageRepository $pageRepository): Response
    {
        $home = $pageRepository->findOneBy(['is_home' => true]);

        return $this->render('page.html.twig', [
            'page' => $home,
        ]);
    }

    #[Route('/{slug}', name: 'page')]
    public function page(string $slug, PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['Slug' => $slug]);

        return $this->render('page.html.twig', [
            'page' => $page,
        ]);
    }
}
