<?php
/**
 * Class OfferTypeRepository
 *
 * @author Bogdan Dinu <bogdan.dinu@innobyte.com>
 */

namespace App\AdminBundle\Repository;

use App\AdminBundle\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Category::class);
    }
}