<?php

namespace App\Controller\Admin;

use App\Repository\PageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends AbstractController
{

    #[Route('/admin', name: 'admin_panel')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        //* @var \App\Entity\User $user */
        $user = $this->getUser();

        return $this->render('admin/panel/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/admin/users', name: 'admin_panel_users')]
    public function users(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('admin/panel/users.html.twig', [
            'users' => $users,
        ]);
    }
}
