<?php

namespace App\Controller\Admin;

use App\Entity\MenuPages;
use App\Form\AddToMenuType;
use App\Repository\MenuPagesRepository;
use App\Repository\PageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

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

    #[Route('/admin/menu', name: 'admin_panel_menu')]
    public function menu(Request $request): Response
    {
        $form = $this->createForm(AddToMenuType::class, []);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $menuPages = $form->getData();

            $i = 0;
            foreach ($menuPages['Page'] as $page)
            {
                $i++;
                $menu = new MenuPages();
                $menu->setPageOrder($i);
                $menu->setLabel($page->getName());
                $this->em->persist($menu);
            }

            $this->em->flush();

            return $this->redirectToRoute('admin_panel_menu');
        }

        return $this->render('admin/panel/menu.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
