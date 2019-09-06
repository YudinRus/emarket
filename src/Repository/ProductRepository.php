<?php


namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findOllOrderByPrice()
    {
        $qb = $this -> createQueryBuilder('product')
            ->leftJoin('product.category', 'category', 'WITH', 'product.id = ?1', 'category.id')
            ->orderBy('product.price', 'ASC')
            ->getQuery();

        return $qb->execute();
    }
}

// Example - $qb->join('u.Group', 'g', Expr\Join::WITH, $qb->expr()->eq('u.status_id', '?1'))
// Example - $qb->join('u.Group', 'g', 'WITH', 'u.status = ?1')
// Example - $qb->join('u.Group', 'g', 'WITH', 'u.status = ?1', 'g.id')
//public function join($join, $alias, $conditionType = null, $condition = null, $indexBy = null);