<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity
 * @ORM\Table(name="electric_rail")
 */
class ElectricRail
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $reference;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $length;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RailScale", inversedBy="electricRails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $railScale;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RailConstructor", inversedBy="electricRails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $railConstructor;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getReference();
    }

    /**
     * @return integer
     */
    public function getId() {

        return $this->id;
    }

    /**
     * @param string $reference
     * @return $this
     */
    public function setReference($reference) {

        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() {

        return $this->reference;
    }

    /**
     * @param float $length
     * @return $this
     */
    public function setLength($length) {

        $this->length = $length;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength() {

        return $this->length;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description) {

        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() {

        return $this->description;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price) {

        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice() {

        return $this->price;
    }

    /**
     * @param RailScale $railScale
     * @return $this
     */
    public function setRailScale($railScale) {

        $this->railScale = $railScale;
        return $this;
    }

    /**
     * @return RailScale
     */
    public function getRailScale() {

        return $this->railScale;
    }

    /**
     * @param RailConstructor $railConstructor
     * @return $this
     */
    public function setRailConstructor($railConstructor) {

        $this->railConstructor = $railConstructor;
        return $this;
    }

    /**
     * @return RailConstructor
     */
    public function getRailConstructor() {

        return $this->railConstructor;
    }
}
