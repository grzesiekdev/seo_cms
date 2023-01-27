<?php

namespace App\Repository;

use App\Entity\Page;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Page>
 *
 * @method Page|null find($id, $lockMode = null, $lockVersion = null)
 * @method Page|null findOneBy(array $criteria, array $orderBy = null)
 * @method Page[]    findAll()
 * @method Page[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Page::class);
    }

    public function save(Page $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Page $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    // LEGACY: currently no use
    /**
     * @return Page[] Returns an array of Page objects
     */
    public function findAllPagesWithParents(): array
    {
        $pages = $this->findAll();
        $parents_ids = [];
        foreach ($pages as $page) {
            $parents_ids[] = $page->getParentId();
        }
        return $this->mapSlugs($pages, $parents_ids);
    }

    public function mapSlugs($pages, $parent_ids): array
    {
        $slugs = [];
        foreach ($pages as $page) {
            if (in_array($page->getParentId(), $parent_ids) && null !== $page->getParentId()) {
                $parent = $this->findOneBy(['id' => $page->getParentId()]);
                if (null !== $parent) {
                    $slugs[] = $parent->getSlug().'/'.$page->getSlug();
                }
            } else {
                $slugs[] = $page->getSlug();
            }
        }
        return $slugs;
    }
//    public function findOneBySomeField($value): ?Page
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
