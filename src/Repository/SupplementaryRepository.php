<?php

namespace App\Repository;

use App\Entity\Supplementary;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Supplementary|null find($id, $lockMode = null, $lockVersion = null)
 * @method Supplementary|null findOneBy(array $criteria, array $orderBy = null)
 * @method Supplementary[]    findAll()
 * @method Supplementary[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupplementaryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Supplementary::class);
    }

    // /**
    //  * @return Supplementary[] Returns an array of Supplementary objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Supplementary
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
