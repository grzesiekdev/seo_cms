<?php

namespace App\DataFixtures;

use App\Entity\Page;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $page = new Page();
        $page->setName('Page 1');
        $page->setTitle('SEO Title');
        $page->setDescription('Basic description');
        $page->setCreationDate(Datetime::createFromFormat('d-m-Y', date('d-m-Y')));
        $page->setContent('Just a dummy content');
        $manager->persist($page);

        $page2 = new Page();
        $page2->setName('Page 2');
        $page2->setTitle('SECOND SEO Title');
        $page2->setDescription('SECOND Basic description');
        $page2->setCreationDate(Datetime::createFromFormat('d-m-Y', date('d-m-Y')));
        $page2->setContent('Just a SECOND dummy content');
        $manager->persist($page2);


        $manager->flush();
    }
}
