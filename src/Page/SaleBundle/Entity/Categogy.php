<?php

namespace Page\SaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categogy
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Page\SaleBundle\Entity\CategogyRepository")
 */
class Categogy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=400)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_s", type="integer")
     */
    private $orderS;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Categogy
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return Categogy
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set orderS
     *
     * @param integer $orderS
     * @return Categogy
     */
    public function setOrderS($orderS)
    {
        $this->orderS = $orderS;

        return $this;
    }

    /**
     * Get orderS
     *
     * @return integer 
     */
    public function getOrderS()
    {
        return $this->orderS;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Categogy
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
