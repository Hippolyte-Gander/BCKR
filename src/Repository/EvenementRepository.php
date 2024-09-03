<?php

namespace App\Repository;

use App\Entity\Evenement;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenement>
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    //    /**
    //     * @return Evenement[] Returns an array of Evenement objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

       public function evenementsFuturs() 
       {
           return $this->createQueryBuilder('e')
               ->andWhere('e.dateDebut >= :today')
               ->setParameter('today', new DateTime())
               ->orderBy('e.dateDebut', 'DESC')
               ->getQuery()
               ->getResult()
           ;
       }

       public function evenementsPasses() 
       {
           return $this->createQueryBuilder('e')
               ->andWhere('e.dateDebut <= :today')
               ->setParameter('today', new DateTime())
               ->orderBy('e.dateDebut', 'DESC')
               ->getQuery()
               ->getResult()
           ;
       }
}
