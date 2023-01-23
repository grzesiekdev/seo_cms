<?php

namespace App\Controller\Admin;

use App\Form\RobotsType;
use App\Repository\PageRepository;
use App\Service\SitemapGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class PanelController extends AbstractController
{
    private EntityManagerInterface $em;
    private PageRepository $pageRepository;
    private Security $security;

    public function __construct(EntityManagerInterface $em, PageRepository $pageRepository, Security $security)
    {
        $this->em = $em;
        $this->pageRepository = $pageRepository;
        $this->security = $security;
    }

    #[Route('/admin', name: 'admin_panel')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // * @var \App\Entity\User $user */
        $user = $this->getUser();

        return $this->render('admin/panel/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/admin/settings', name: 'admin_panel_settings')]
    public function settings(Request $request, SitemapGenerator $sitemapGenerator): Response
    {
        $robotsForm = $this->createForm(RobotsType::class);
        $robotsForm->handleRequest($request);

        if ($robotsForm->isSubmitted() && $robotsForm->isValid()) {
            $robotsFile = fopen('../public/robots.txt', 'w+') or exit('Unable to open file!');
            $robots = $robotsForm->getData();
            fwrite($robotsFile, $robots['content']);
            fclose($robotsFile);
        }

        return $this->render('admin/panel/settings.html.twig', [
            'form_robots' => $robotsForm->createView(),
            'errors' => $robotsForm->isSubmitted() && !$robotsForm->isValid(),
        ]);
    }

    #[Route('/admin/settings/generateSitemap', name: 'admin_panel_settings_sitemap')]
    public function generateSitemap(SitemapGenerator $sitemapGenerator): Response
    {
        $sitemapGenerator->generateSitemap();

        return $this->redirectToRoute('admin_panel_settings');
    }
}
