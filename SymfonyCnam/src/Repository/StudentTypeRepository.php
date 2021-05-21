<?php

namespace App\Repository;

use App\Entity\StudentType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StudentType|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudentType|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudentType[]    findAll()
 * @method StudentType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudentType::class);
    }

    // /**
    //  * @return StudentType[] Returns an array of StudentType objects
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
    public function findOneBySomeField($value): ?StudentType
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
