<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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

    #[Route('/{alias}/', name: 'page', requirements: ['alias' => '.+'])]
    public function page(string $alias, PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['Alias' => $alias]);
        if (!$page) {
            throw $this->createNotFoundException('This page doesn\'t exists!');
        }

        $slugs = explode('/', $page->getAlias());
        foreach ($slugs as $breadcrumb) {
            $currentPage = $pageRepository->findOneBy(['Slug' => $breadcrumb]);
            $breadcrumbs[] = ['name' => $currentPage->getName(), 'alias' => $currentPage->getAlias()];
        }

        return $this->render('page.html.twig', [
            'page' => $page,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
