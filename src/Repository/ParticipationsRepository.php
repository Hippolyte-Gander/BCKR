<?php

namespace App\Repository;

use App\Entity\Participations;
use App\Model\SearchData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Participations>
 */
class ParticipationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participations::class);
    }

//    /**
//     * @return Participations[] Returns an array of Participations objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Participations
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    // =============== affichage des events selon visibilité dans la recherche PAGE PERSO ===============

    public function findBySearchPagePersoAdmin(SearchData $searchData, int $userId)
    {
        $participations = $this->createQueryBuilder('p')
            ->innerJoin('p.evenementInscrit','e')
            ->innerJoin('p.userInscrit','u')
            ->where('p.userInscrit = :userId')
            ->andWhere('e.visibilite IN (:visibilites)')
            ->setParameter('visibilites', ['admins', 'membres', 'tous'])
            ->setParameter('userId', "%{$userId}%")
            ->orderBy('e.dateDebut', 'DESC');

        if (!empty($searchData->recherche)) {
            $participations ->andWhere('e.titre LIKE :recherche')
                            ->setParameter('recherche', "%{$searchData->recherche}%");
        }

        $participations = $participations
            ->getQuery()
            ->getResult();

        return $participations;
    }

    public function findBySearchPagePersoMembre(SearchData $searchData, int $userId)
    {
        $participations = $this->createQueryBuilder('p')
            ->innerJoin('p.evenementInscrit','e')
            ->innerJoin('p.userInscrit','u')
            ->where('p.userInscrit = :userId')
            ->andWhere('e.visibilite IN (:visibilites)')
            ->setParameter('visibilites', ['membres', 'tous'])
            ->setParameter('userId', "%{$userId}%")
            ->orderBy('e.dateDebut', 'DESC');

        if (!empty($searchData->recherche)) {
            $participations ->andWhere('e.titre LIKE :recherche')
                            ->setParameter('recherche', "%{$searchData->recherche}%");
        }

        $participations = $participations
            ->getQuery()
            ->getResult();

        return $participations;
    }

    public function findBySearchPagePerso(SearchData $searchData, int $userId)
    {
        $participations = $this->createQueryBuilder('p')
            ->innerJoin('p.evenementInscrit','e')
            ->innerJoin('p.userInscrit','u')
            ->where('p.userInscrit = :userId')
            ->andWhere('e.visibilite IN (:visibilite)')
            ->setParameter('visibilite', 'tous')
            ->setParameter('userId', "%{$userId}%")
            ->orderBy('e.dateDebut', 'DESC');

        if (!empty($searchData->recherche)) {
            $participations ->andWhere('e.titre LIKE :recherche')
                            ->setParameter('recherche', "%{$searchData->recherche}%");
        }

        $participations = $participations
            ->getQuery()
            ->getResult();

        return $participations;
    }}
