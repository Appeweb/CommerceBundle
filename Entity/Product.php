<?php

namespace Appeweb\CommerceBundle\Entity;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class Product
{
    /**
     * name of the product
     * 
     * @ORM\Column(type="string", length=180)
     * @var string
     */
    protected $name;

    /**
     * Product's reference
     *
     * @ORM\Column(type="string", length=200)
     * @var 
     */
    protected $ref;

    /**
     * Price in cts
     * 
     * @ORM\Column(type="integer")
     * @var integer
     */
    protected $price;

    /**
     * Text displayed when the article is previewed
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    protected $shortDescription;

    /**
     * Text displayed when the article is viewed
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $longdescription;

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param integer $price
     * @return self
     */
    public function setPrice(int $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
    
    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return self
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get text displayed when the article is viewed
     *
     * @return string
     */ 
    public function getLongdescription(): string
    {
        return $this->longdescription;
    }

    /**
     * Set text displayed when the article is viewed
     *
     * @param string  $longdescription  Text displayed when the article is viewed
     *
     * @return self
     */ 
    public function setLongdescription(string $longdescription): self
    {
        $this->longdescription = $longdescription;

        return $this;
    }

    /**
     * Get Product's ref
     *
     * @return string
     */
    public function getref(): string
    {
        return $this->ref;
    }

    /**
     * set Product'sref
     *
     * @param string $ref
     * @return self
     */
    public function setRef(string $ref): self
    {
        $this->ref = $ref;
        return $this;
    }
}