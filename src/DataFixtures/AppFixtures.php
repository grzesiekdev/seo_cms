<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\Settings;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private readonly UserPasswordHasherInterface $userPasswordHasher) {
    }

    public function load(ObjectManager $manager): void
    {
        $page = new Page();
        $page->setTitle('Home');
        $page->setName("Home");
        $page->setDescription("Test");
        $page->setContent("Welcome");
        $page->setCreationDate(new \DateTime());
        $page->setSlug('home');
        $page->setIsHome(1);
        $page->setRobotsSettings('index, follow');
        $page->setAlias('home');

        $page2 = new Page();
        $page2->setTitle('Example page');
        $page2->setName("Example page");
        $page2->setDescription("Example page Description");
        $page2->setContent("Example page content");
        $page2->setCreationDate(new \DateTime());
        $page2->setSlug('example-page');
        $page2->setIsHome(0);
        $page2->setRobotsSettings('index, follow');
        $page2->setAlias('example-page');

        $settings = new Settings();
        $settings->setSettingName('logo_path');
        $settings->setSettingValue('63d8f4690a75a.png');

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setPassword(
            $this->userPasswordHasher->hashPassword(
                $admin,
                'test12'
            )
        );
        $admin->setRoles(['ROLE_ADMIN']);

        $manager->persist($page);
        $manager->persist($page2);
        $manager->persist($settings);
        $manager->persist($admin);
        $manager->flush();
    }
}
