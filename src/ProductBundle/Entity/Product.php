<?php

namespace ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=2, scale=0)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="author", type="text")
	 */
	private $author;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="genre", type="text")
	 */
	 private $genre;
	 
	 
	 
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
	
	/**
	 * Get author
	 *
	 * @return string
	 */
	public function getAuthor()
	{
		return $this->author;
	}
	
	/**
	 * Set author
	 * 
	 * @param string $author
	 *
	 * @return Product
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
		return $this;
	}
	
	/**
	 * Get genre
	 * 
	 * @return string
	 */
	public function getGenre()
	{
		return $this->genre;
	}
	
	/**
	 * Set genre
	 *
	 * @param string $genre
	 *
	 * @return Product
	 */
	public function setGenre($genre)
	{
		$this->genre = $genre;
		return $this;
	}
	
}

