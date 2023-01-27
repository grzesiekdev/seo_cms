<?php

namespace App\Controller\Admin\Appearance;

use App\Entity\MenuPages;
use App\Form\AddToMenuType;
use App\Repository\MenuPagesRepository;
use App\Repository\PageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    private EntityManagerInterface $em;
    private PageRepository $pageRepository;

    public function __construct(EntityManagerInterface $em, PageRepository $pageRepository)
    {
        $this->em = $em;
        $this->pageRepository = $pageRepository;
    }

    #[Route('/admin/menu', name: 'admin_panel_menu')]
    public function menu(Request $request, MenuPagesRepository $menuPagesRepository): Response
    {
        $form = $this->createForm(AddToMenuType::class, []);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $menuPages = $form->getData();
            $prevMenus = $menuPagesRepository->findAll();
            $i = 0;
            foreach ($menuPages['Page'] as $page) {
                ++$i;
                $menu = new MenuPages();
                $menu->setPageOrder(count($prevMenus) + $i);
                $menu->setLabel($page->getName());
                $menu->setPageId($page->getId());
                $this->em->persist($menu);
                $page->setMenuPages($menu);
            }

            $this->em->flush();

            return $this->redirectToRoute('admin_panel_menu');
        }
        $menuPages = $menuPagesRepository->findAll();
        $menuPagesIds = [];
        foreach ($menuPages as $menuPage) {
            $menuPagesIds[] = $menuPage->getPageId();
        }
        $pagesInMenu = $this->pageRepository->findBy(['id' => $menuPagesIds]);

        usort($pagesInMenu, function ($first, $second) {
            return $first->getMenuPages()->getPageOrder() > $second->getMenuPages()->getPageOrder();
        });

        return $this->render('admin/panel/menu.html.twig', [
            'form' => $form->createView(),
            'pages_in_menu' => $pagesInMenu,
        ]);
    }

    #[Route('/admin/menu/delete/{id}', name: 'admin_panel_menu_delete')]
    public function menu_delete(int $id, MenuPagesRepository $menuPagesRepository, PageRepository $pageRepository): Response
    {
        $menu = $menuPagesRepository->findOneBy(['id' => $id]);
        $page = $pageRepository->findOneBy(['id' => $menu->getPageId()]);
        $page->setMenuPages(null);
        $this->em->remove($menu);
        $this->em->flush();

        return $this->redirectToRoute('admin_panel_menu');
    }

    #[Route('/admin/menu/sort/{id}/{position}', name: 'admin_panel_menu_sort')]
    public function sortAction($id, $position, MenuPagesRepository $menuPagesRepository)
    {
        $menu = $menuPagesRepository->findOneBy(['id' => $id]);
        $prevPosition = $menu->getPageOrder();

        $replacedMenu = $menuPagesRepository->findOneBy(['PageOrder' => $position]);

        $menu->setPageOrder($position);
        if (null === $replacedMenu) {
            $firstMenu = $menuPagesRepository->findOneBy(['PageOrder' => 1]);
            $firstMenu->setPageOrder(1);
        } else {
            $replacedMenu->setPageOrder($prevPosition);
            $this->em->persist($replacedMenu);
        }
        $this->em->persist($menu);
        $this->em->flush();

        return $this->redirectToRoute('admin_panel_menu');
    }
}
