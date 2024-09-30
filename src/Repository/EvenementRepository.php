<?php

namespace App\Repository;

use App\Entity\Evenement;
use App\Model\SearchData;
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

    // =============== affichage des events selon visibilité ===============

    public function evenementsFutursAdmin() 
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.dateDebut >= :today')
            ->andWhere('e.visibilite IN (:visibilites)')
            ->setParameter('today', new DateTime())
            ->setParameter('visibilites', ['admins', 'membres', 'tous'])
            ->orderBy('e.dateDebut', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function evenementsFutursMembre() 
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.dateDebut >= :today')
            ->andWhere('e.visibilite IN (:visibilites)')
            ->setParameter('today', new DateTime())
            ->setParameter('visibilites', ['membres', 'tous'])
            ->orderBy('e.dateDebut', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function evenementsFutursTous() 
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.dateDebut >= :today')
            ->andWhere('e.visibilite = :visibilite')
            ->setParameter('today', new DateTime())
            ->setParameter('visibilite', 'tous')
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

    // =============== affichage des events selon visibilité dans la recherche PAGE EVENTS ===============

    public function findBySearch(SearchData $searchData)
    {
        if (!empty($searchData->recherche)) {
            $evenements = $this->createQueryBuilder('e')
                ->where('e.titre LIKE :recherche')
                ->andWhere('e.dateDebut >= :today')
                ->andWhere('e.visibilite = :visibilite')
                ->setParameter('recherche', "%{$searchData->recherche}%")
                ->setParameter('today', new DateTime())
                ->setParameter('visibilite', 'tous')
                ->orderBy('e.dateDebut', 'DESC');
        }

        $evenements = $evenements
            ->getQuery()
            ->getResult();

        return $evenements;
    }

    public function findBySearchMembre(SearchData $searchData)
    {
        if (!empty($searchData->recherche)) {
            $evenements = $this->createQueryBuilder('e')
                ->where('e.titre LIKE :recherche')
                ->andWhere('e.dateDebut >= :today')
                ->andWhere('e.visibilite IN (:visibilites)')
                ->setParameter('recherche', "%{$searchData->recherche}%")
                ->setParameter('today', new DateTime())
                ->setParameter('visibilites', ['membres', 'tous'])
                ->orderBy('e.dateDebut', 'DESC');
        }

        $evenements = $evenements
            ->getQuery()
            ->getResult();

        return $evenements;
    }

    public function findBySearchAdmin(SearchData $searchData)
    {
        if (!empty($searchData->recherche)) {
            $evenements = $this->createQueryBuilder('e')
                ->where('e.titre LIKE :recherche')
                ->andWhere('e.dateDebut >= :today')
                ->andWhere('e.visibilite IN (:visibilites)')
                ->setParameter('recherche', "%{$searchData->recherche}%")
                ->setParameter('today', new DateTime())
                ->setParameter('visibilites', ['admins', 'membres', 'tous'])
                ->orderBy('e.dateDebut', 'DESC');
        }

        $evenements = $evenements
            ->getQuery()
            ->getResult();

        return $evenements;
    }

}
