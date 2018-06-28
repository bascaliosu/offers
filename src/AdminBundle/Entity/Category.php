<?php
/**
 * Class OfferType
 *
 * @author Bogdan Dinu <bogdan.dinu@innobyte.com>
 */

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\AdminBundle\Entity\OfferType", mappedBy="category", orphanRemoval=true)
     */
    private $offerType;

    /**
     * Category constructor.
     */
    public function __construct()
    {
        $this->offerType = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getId()
    {
        return $this->offerType;
    }

    /**
     * get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set name
     *
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Generates the magic method
     *
     */
    public function __toString()
    {
        return isset($this->name)? $this->name : "";
    }
}
