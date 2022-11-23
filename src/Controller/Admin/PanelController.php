<?php

namespace App\Controller\Admin;

use App\Repository\PageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends AbstractController
{

    #[Route('/admin', name: 'admin_panel')]
    public function index(): Response
    {
        return $this->render('admin/panel/index.html.twig', [
            'controller_name' => 'PanelController',
        ]);
    }
}
