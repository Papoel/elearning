<?php

namespace App\Repository;

use App\Entity\Cofrend;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cofrend|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cofrend|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cofrend[]    findAll()
 * @method Cofrend[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CofrendRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cofrend::class);
    }

    // /**
    //  * @return Cofrend[] Returns an array of Cofrend objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cofrend
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
