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

    #[Route('/{slug}/', name: 'page')]
    public function page(string $slug, PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['Slug' => $slug]);
        if (!$page) {
            throw $this->createNotFoundException('This page doesn\'t exists!');
        }

        return $this->render('page.html.twig', [
            'page' => $page,
        ]);
    }

    #[Route('/{parent_slug}/{slug}/', name: 'page_parent')]
    public function pageParent(string $parent_slug, string $slug, PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['Slug' => $slug]);
        $parent = $pageRepository->findOneBy(['Slug' => $parent_slug]);
        if (!$parent || !$page) {
            throw $this->createNotFoundException('This page doesn\'t exists!');
        }

        return $this->render('page.html.twig', [
            'page' => $page,
        ]);
    }
}
