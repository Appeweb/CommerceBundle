<?php

namespace Appeweb\CommerceBundle\Entity;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class BasketItem
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @var Product
     */
    protected $product;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $quantity;

    /**
     * Represent Product's price * quantity
     *
     * @var int
     */
    protected $linePrice;

    /**
     * Get the value of product
     *
     * @return  Product
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @param  Product  $product
     *
     * @return  self
     */ 
    public function setProduct(Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of quantity
     *
     * @return  int
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @param  int  $quantity
     *
     * @return  self
     */ 
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getLinePrice(): int
    {
        $lineprice = $this->product->getPrice() * $this->getQuantity();
        return $lineprice;
    }

}