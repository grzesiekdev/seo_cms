<?php

namespace App\Controller\Admin\Appearance;

use App\Form\ThemeSettingsType;
use App\Repository\SettingsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThemeController extends AbstractController
{
    private EntityManagerInterface $em;
    private SettingsRepository $settingsRepository;

    public function __construct(EntityManagerInterface $em, SettingsRepository $settingsRepository)
    {
        $this->em = $em;
        $this->settingsRepository = $settingsRepository;
    }

    #[Route('/admin/theme', name: 'admin_panel_theme')]
    public function theme(Request $request): Response
    {
        $form = $this->createForm(ThemeSettingsType::class);
        $form->handleRequest($request);

        $logo_setting = $this->settingsRepository->findOneBy(['setting_name' => 'logo_path']);

        if ($form->isSubmitted() && $form->isSubmitted()) {
            $directory = '../public_html/img/logo/';
            $file = $form['logo']->getData();
            if ('' != $file) {
                if (null !== $logo_setting) {
                    if (file_exists($directory.$logo_setting->getSettingValue())) {
                        unlink($directory.$logo_setting->getSettingValue());
                    }
                }

                $extension = $file->guessExtension();
                $newFileName = uniqid().'.'.$extension;
                $file->move($directory, $newFileName);

                $logo_setting->setSettingValue($newFileName);
                $this->em->persist($logo_setting);
            }
        }
        $this->em->flush();

        return $this->render('admin/panel/theme.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
