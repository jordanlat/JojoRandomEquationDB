<?php

namespace App\Repository;

use App\Entity\Digimon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Digimon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Digimon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Digimon[]    findAll()
 * @method Digimon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DigimonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Digimon::class);
    }

    // /**
    //  * @return Digimon[] Returns an array of Digimon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Digimon
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
