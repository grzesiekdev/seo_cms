<?php

namespace App\Controller\Admin;

use App\Repository\PageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    private $em;
    private $pageRepository;
    public function __construct(EntityManagerInterface $em, PageRepository $pageRepository)
    {
        $this->em = $em;
        $this->pageRepository = $pageRepository;
    }

    #[Route('/admin/pages', name: 'admin_panel_pages')]
    public function pages(): Response
    {
        $pages = $this->pageRepository->findAll();
        return $this->render('admin/panel/pages.html.twig', [
            'pages' => $pages,
        ]);
    }

    #[Route('/admin/pages/edit/{id}', name: 'admin_panel_pages_edit')]
    public function pages_edit(int $id): Response
    {
        $page = $this->pageRepository->findOneBy(['id' => $id]);

        return $this->render('admin/panel/page_edit.html.twig', [
            'page' => $page,
        ]);
    }
}
