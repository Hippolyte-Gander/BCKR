<?php

namespace App\Repository;

use App\Model\SearchData;
use App\Entity\Participations;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;

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
            ->setParameter('userId', $userId)
            ->orderBy('e.dateDebut', 'DESC');
            
            if (!empty($searchData->recherche)) {
                $participations = $participations
                    ->andWhere('e.titre LIKE :recherche')
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
            ->setParameter('userId', $userId)
            ->orderBy('e.dateDebut', 'DESC');
            
            if (!empty($searchData->recherche)) {
                $participations = $participations
                    ->andWhere('e.titre LIKE :recherche')
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
            ->setParameter('userId', $userId)
            ->orderBy('e.dateDebut', 'DESC');
            
            if (!empty($searchData->recherche)) {
                $participations = $participations
                    ->andWhere('e.titre LIKE :recherche')
                    ->setParameter('recherche', "%{$searchData->recherche}%");
            }
            
        $participations = $participations
            ->getQuery()
            ->getResult();
            
        return $participations;
    }

    //  --------------- SQL en 1 fonction ---------------
    // public function findBySearchPagePerso(SearchData $searchData, int $userId)
    // {
    //     $conn = $this->getEntityManager()->getConnection();

    //     $recherche = $searchData->recherche;

    //     if (!$recherche) {
    //         $sql = '
    //         SELECT * 
    //         FROM participations p
    //         INNER JOIN evenement e ON e.id = p.evenement_inscrit_id
    //         INNER JOIN user u ON u.id = p.user_inscrit_id
    //         WHERE u.id = :userId
    //             AND e.visibilite = "tous"
    //         ORDER BY e.date_debut DESC
    //         ';

    //         $resultSet = $conn->executeQuery($sql, ['userId' => $userId]);
    //     } else {
    //         $sql = '
    //             SELECT * 
    //             FROM participations p
    //             INNER JOIN evenement e ON e.id = p.evenement_inscrit_id
    //             INNER JOIN user u ON u.id = p.user_inscrit_id
    //             WHERE u.id = :userId
    //                 AND e.visibilite = "tous"
    //                 AND LOWER(e.titre) LIKE :recherche
    //             ORDER BY e.date_debut DESC
    //             ';

    //             $recherche = '%' . $recherche . '%';

    //             $resultSet = $conn->executeQuery($sql, ['userId' => $userId, 'recherche' => $recherche]);
    //     }
    //     return $resultSet->fetchAllAssociative();
    // }

    //  --------------- SQL en 2 fonctions ---------------
    // public function findPagePerso(int $userId)
    // {
    //     $conn = $this->getEntityManager()->getConnection();

    //     $sql = '
    //     SELECT * 
    //     FROM participations p
    //     INNER JOIN evenement e ON e.id = p.evenement_inscrit_id
    //     INNER JOIN user u ON u.id = p.user_inscrit_id
    //     WHERE u.id = :userId
    //         AND e.visibilite = "tous"
    //     ORDER BY e.date_debut DESC
    //     ';

    //     $resultSet = $conn->executeQuery($sql, ['userId' => $userId]);

    //     return $resultSet->fetchAllAssociative();
    // }

    // public function findBySearchPagePerso(SearchData $searchData, int $userId)
    // {
    //     $conn = $this->getEntityManager()->getConnection();

    //     $recherche = $searchData->recherche;
    //     $recherche = '%' . $recherche . '%';

    //     $sql = '
    //         SELECT * 
    //         FROM participations p
    //         INNER JOIN evenement e ON e.id = p.evenement_inscrit_id
    //         INNER JOIN user u ON u.id = p.user_inscrit_id
    //         WHERE u.id = :userId
    //             AND e.visibilite = "tous"
    //             AND LOWER(e.titre) LIKE :recherche
    //         ORDER BY e.date_debut DESC
    //         ';

    //     $resultSet = $conn->executeQuery($sql, ['userId' => $userId, 'recherche' => $recherche]);
            
    //     // dd($resultSet->fetchAllAssociative());
    //     return $resultSet->fetchAllAssociative();
    // }


    //  --------------- Native SQL en 2 fonctions --------------- n'affiche que 1 event au lieu de 2.. mais la requête marche dans la BDD
    // public function findPagePerso(int $userId, EntityManagerInterface $entityManagerInterface)
    // {
    //     $rsm = new ResultSetMappingBuilder($entityManagerInterface);
    //     $rsm->addRootEntityFromClassMetadata('App\Entity\Participations', 'p');
    //     $rsm->addJoinedEntityFromClassMetadata('App\Entity\Evenement', 'e', 'p', 'evenementInscrit', [
    //         'id' => 'evenement_inscrit_id',
    //     ]);
    //     $rsm->addJoinedEntityFromClassMetadata('App\Entity\User', 'u', 'p', 'userInscrit', [
    //         'id' => 'user_inscrit_id',
    //     ]);

    //     $query = $entityManagerInterface->createNativeQuery('
    //         SELECT * 
    //         FROM participations p
    //         INNER JOIN evenement e ON e.id = p.evenement_inscrit_id
    //         INNER JOIN user u ON u.id = p.user_inscrit_id
    //         WHERE u.id = :userId
    //             AND e.visibilite = "tous"
    //         ORDER BY e.date_debut DESC
    //         ', $rsm);

    //     $query->setParameter('userId', $userId);

    //     dd($query->getResult());
    //     return $query->getResult();
    // }

    // public function findBySearchPagePerso(SearchData $searchData, int $userId, EntityManagerInterface $entityManagerInterface)
    // {
    //     $recherche = $searchData->recherche;
    //     $recherche = '%' . $recherche . '%';

    //     $rsm = new ResultSetMappingBuilder($entityManagerInterface);
    //     $rsm->addRootEntityFromClassMetadata('App\Entity\Participations', 'p');

    //     $query = $entityManagerInterface->createNativeQuery('
    //         SELECT * 
    //         FROM participations p
    //         INNER JOIN evenement e ON e.id = p.evenement_inscrit_id
    //         INNER JOIN user u ON u.id = p.user_inscrit_id
    //         WHERE u.id = :userId
    //             AND LOWER(e.titre) LIKE :recherche
    //             AND e.visibilite = "tous"
    //         ORDER BY e.date_debut DESC
    //         ', $rsm);

    //     $query->setParameter('userId', $userId);
    //     $query->setParameter('recherche', $recherche);

    //     // dd($query->getResult());
    //     return $query->getResult();
    // }
}
