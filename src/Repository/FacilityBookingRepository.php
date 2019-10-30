<?php

namespace App\Repository;

use App\Entity\FacilityBooking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FacilityBooking|null find($id, $lockMode = null, $lockVersion = null)
 * @method FacilityBooking|null findOneBy(array $criteria, array $orderBy = null)
 * @method FacilityBooking[]    findAll()
 * @method FacilityBooking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FacilityBookingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FacilityBooking::class);
    }

    // /**
    //  * @return FacilityBooking[] Returns an array of FacilityBooking objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FacilityBooking
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
