<?php

namespace App\Repository;

use App\Entity\Karate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Karate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Karate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Karate[]    findAll()
 * @method Karate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KarateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Karate::class);
    }

    // /**
    //  * @return Karate[] Returns an array of Karate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Karate
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
