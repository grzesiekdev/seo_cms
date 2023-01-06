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
    public function index(MenuPagesRepository $menuPagesRepository): Response
    {
        $menu = $menuPagesRepository->findAll();
        usort($menu, function ($first, $second) {
            return $first->getPageOrder() > $second->getPageOrder();
        });

        return $this->render('index.html.twig', [
            'menu' => $menu,
        ]);
    }

    #[Route('/{slug}', name: 'page')]
    public function page(string $slug, PageRepository $pageRepository, MenuPagesRepository $menuPagesRepository): Response
    {
        $page = $pageRepository->findOneBy(['Slug' => $slug]);
        $menu = $menuPagesRepository->findAll();
        usort($menu, function ($first, $second) {
            return $first->getPageOrder() > $second->getPageOrder();
        });

        return $this->render('page.html.twig', [
            'page' => $page,
            'menu' => $menu,
        ]);
    }
}
