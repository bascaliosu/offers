<?php
/**
 * Class OfferType
 *
 * @author Bogdan Dinu <bogdan.dinu@innobyte.com>
 */

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\OfferTypeRepository")
 */
class OfferType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offer_type_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $offerTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Category", inversedBy="offerType")
     * @ORM\JoinColumn(name="category", referencedColumnName="category_id", nullable=false)
     */
    private $category;

    /**
     * get offerTypeId
     *
     * @return int
     */
    public function getId()
    {
        return $this->offerTypeId;
    }

    /**
     * get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * set type
     *
     * @param $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * get category
     *
     * @return Category
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * set category
     *
     * @param Category $category
     *
     * @return OfferType
     */
    public function setCategory(Category $category): self
    {
        $this->category = $category;
        return $this;
    }
}
