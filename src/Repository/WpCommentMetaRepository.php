<?php

namespace App\Repository;

use App\Entity\WpCommentMeta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WpCommentMeta>
 *
 * @method WpCommentMeta|null find($id, $lockMode = null, $lockVersion = null)
 * @method WpCommentMeta|null findOneBy(array $criteria, array $orderBy = null)
 * @method WpCommentMeta[]    findAll()
 * @method WpCommentMeta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WpCommentMetaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WpCommentMeta::class);
    }

    public function add(WpCommentMeta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(WpCommentMeta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return WpCommentMeta[] Returns an array of WpCommentMeta objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WpCommentMeta
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
