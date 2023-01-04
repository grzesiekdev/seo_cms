<?php

namespace App\DataFixtures;

use App\Entity\Menu;
use App\Entity\Page;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $menu = new Menu();
        $menu -> setLabel('Test 1');
        $menu -> setPageOrder(1);
        $manager->persist($menu);



        $manager->flush();
    }
}
