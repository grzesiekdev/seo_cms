<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use App\Form\PageType;
use App\Repository\MenuPagesRepository;
use App\Repository\PageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

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

    #[Route('/admin/pages/new', name: 'admin_panel_pages_new')]
    public function pages_new(Request $request): Response
    {
        $page = new Page();
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $page = $form->getData();
            $this->slugify($form, $page);
            $current_date = date("d-m-Y h:i:s");
            $date = new \DateTime($current_date);
            $page->setCreationDate($date);

            $this->check_if_home($form, $page);
            $this->em->persist($page);
            $this->em->flush();

            return $this->redirectToRoute('admin_panel_pages');
        }

        return $this->render('admin/panel/page_new.html.twig', [
            'page' => $page,
            'form' => $form->createView(),
            'errors' => $form->isSubmitted() && !$form->isValid()
        ]);
    }

    #[Route('/admin/pages/delete/{id}', name: 'admin_panel_pages_delete')]
    public function pages_delete(int $id, MenuPagesRepository $menuPagesRepository): Response
    {
        $page = $this->pageRepository->findOneBy(['id' => $id]);
        $menuPage = $menuPagesRepository->findOneBy(['page_id' => $page->getId()]);
        $this->em->remove($page);
        if($menuPage !== null)
        {
            $this->em->remove($menuPage);
        }
        $this->em->flush();

        return $this->redirectToRoute('admin_panel_pages');
    }

    #[Route('/admin/pages/edit/{id}', name: 'admin_panel_pages_edit')]
    public function pages_edit(Request $request, int $id): Response
    {
        $page = $this->pageRepository->findOneBy(['id' => $id]);

        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $page = $form->getData();
            $this->slugify($form, $page);

            $page->setWasEdited(true);
            $this->check_if_home($form, $page);
            $this->em->persist($page);
            $this->em->flush();

            return $this->redirectToRoute('admin_panel_pages');
        }


        return $this->render('admin/panel/page_edit.html.twig', [
            'page' => $page,
            'form' => $form->createView(),
            'errors' => $form->isSubmitted() && !$form->isValid()
        ]);
    }

    /**
     * @param \Symfony\Component\Form\FormInterface $form
     * @param $page
     * @return void
     */
    public function slugify(\Symfony\Component\Form\FormInterface $form, &$page): void
    {
        if (empty($form['slug']->getData())) {
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $form['name']->getData())));
            if ($this->pageRepository->findBy(['Slug' => $slug])) {
                $page->setSlug($slug . '-' . uniqid());
            } else {
                $page->setSlug($slug);
            }
        }
    }

    /**
     * @param \Symfony\Component\Form\FormInterface $form
     * @param $page
     * @return void
     */
    public function check_if_home(\Symfony\Component\Form\FormInterface $form, &$page): void
    {
        if($form->get('is_home')->getData())
        {
            $previous_home = $this->pageRepository->findOneBy(['is_home' => true]);
            if ($previous_home)
            {
                $previous_home->setIsHome(false);
                $page->setIsHome(true);
            }
        }
    }
}
