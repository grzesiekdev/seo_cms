<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends AbstractController
{
    #[Route('/admin/panel', name: 'app_admin_panel')]
    public function index(): Response
    {
        return $this->render('admin/panel/index.html.twig', [
            'controller_name' => 'PanelController',
        ]);
    }

    #[Route('/admin/panel/pages', name: 'app_admin_panel_pages')]
    public function pages(): Response
    {
        return $this->render('admin/panel/pages.html.twig', [
            'controller_name' => 'PanelController',
        ]);
    }
}
