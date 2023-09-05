<?php

namespace App\Repository;

use App\Entity\ZoneDeLoisir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ZoneDeLoisir|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZoneDeLoisir|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZoneDeLoisir[]    findAll()
 * @method ZoneDeLoisir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZoneDeLoisirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZoneDeLoisir::class);
    }

    // /**
    //  * @return ZoneDeLoisir[] Returns an array of ZoneDeLoisir objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ZoneDeLoisir
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
  public function findZone(int $id):array{
      $pdo=getPdo();
      $query =$pdo->prepare("SELECT* FROM ZonDeLoisir WHERE id=:id");

      $query->execute(['id'=>$id]);
      $article=$query->fetch();
      return $article;
  }
}
