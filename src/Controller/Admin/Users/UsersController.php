<?php

namespace App\Controller\Admin\Users;

use App\Repository\PageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class UsersController extends AbstractController
{
    private EntityManagerInterface $em;
    private Security $security;

    public function __construct(EntityManagerInterface $em, Security $security)
    {
        $this->em = $em;
        $this->security = $security;
    }

    #[Route('/admin/users', name: 'admin_panel_users')]
    public function users(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('admin/panel/users.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/admin/users/delete/{id}', name: 'admin_panel_users_delete')]
    public function user_delete(UserRepository $userRepository, int $id): Response
    {
        $user = $userRepository->findOneBy(['id' => $id]);
        if ($user !== $this->security->getUser() and $user->getRoles()[0] != 'ROLE_ADMIN') {
            $this->em->remove($user);
            $this->em->flush();
        }

        return $this->redirectToRoute('admin_panel_users');
    }

    #[Route('/admin/users/add-role/{id}', name: 'admin_panel_users_add_role')]
    public function user_add_role(UserRepository $userRepository, int $id): Response
    {
        $user = $userRepository->findOneBy(['id' => $id]);
        $user->setRoles(['ROLE_EDITOR']);
        $this->em->flush();
        $this->em->persist($user);

        return $this->redirectToRoute('admin_panel_users');
    }

    #[Route('/admin/users/remove-role/{id}', name: 'admin_panel_users_remove_role')]
    public function user_remove_role(UserRepository $userRepository, int $id): Response
    {
        $user = $userRepository->findOneBy(['id' => $id]);
        $user->setRoles(['ROLE_USER']);
        $this->em->flush();
        $this->em->persist($user);

        return $this->redirectToRoute('admin_panel_users');
    }
}