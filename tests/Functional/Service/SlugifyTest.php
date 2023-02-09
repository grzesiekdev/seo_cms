<?php

namespace App\Tests\Functional\Service;

use App\Entity\Page;
use App\Repository\PageRepository;
use App\Service\Slugify;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SlugifyTest extends KernelTestCase
{
    /**
     * @var EntityManager
     */
    private EntityManager $entityManager;
    private \Symfony\Component\DependencyInjection\ContainerInterface|\Symfony\Component\DependencyInjection\Container $container;
    private ?object $slugify;
    protected function setUp(): void
    {
        $kernel = self::bootKernel([
            'debug' => false
        ]);
        $this->container = static::getContainer();
        $this->slugify = $this->container->get(Slugify::class);

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testSlugifyInGeneralCase() : void {
        $slugified = $this->slugify->slugify('example page name');
        $this->assertEquals('example-page-name', $slugified);
    }

    public function testSlugifyForPolishCharacters() : void {
        $slugified = $this->slugify->slugify('żółte żyto prądem płynie');
        $this->assertEquals('zolte-zyto-pradem-plynie', $slugified);
    }

    public function testSlugifyForNumbers() : void {
        $slugified = $this->slugify->slugify('1 number and 24 others 19 98');
        $this->assertEquals('1-number-and-24-others-19-98', $slugified);
    }

    public function testSlugifyForNumbersAndPolishCharacters() : void {
        $slugified = $this->slugify->slugify('1 number and 24 others 19 98 ąćżś');
        $this->assertEquals('1-number-and-24-others-19-98-aczs', $slugified);
    }

    public function testGetSlugForPassedAllFields() : void {
        $page = $this->entityManager->getRepository(Page::class)->findOneBy(['id' => 1]);
        $form_data = [
            'slug' => 'example-page-name',
            'parent_id' => null,
            'name' => 'Example page name'
        ];
        $this->slugify->getSlug($form_data, $page);

        $this->assertEquals('example-page-name', $page->getSlug());
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->entityManager->close();
    }
}
