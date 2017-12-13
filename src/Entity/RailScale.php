<?php
/**
 * Created by PhpStorm.
 * User: thco
 * Date: 12/12/17
 * Time: 12:26
 */

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;



/**
 * @ApiResource
 * @ORM\Entity
 * @ORM\Table(name="rail_scale")
 */
class RailScale
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\Type(type="string")
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\StraightRail", mappedBy="railScale")
     */
    private $straightRails;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ElectricRail", mappedBy="railScale")
     */
    private $electricRails;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SwitchRail", mappedBy="railScale")
     */
    private $switchRails;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CurvedRail", mappedBy="railScale")
     */
    private $curvedRails;

    /**
     * RailScale constructor.
     */
    public function __construct()
    {
        $this->straightRails = new ArrayCollection();
        $this->switchRails = new ArrayCollection();
        $this->curvedRails = new ArrayCollection();
        $this->electricRails = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return integer
     */
    public function getId() {

        return $this->id;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name) {

        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {

        return $this->name;
    }

    /**
     * @param StraightRail $rail
     * @return $this
     */
    public function addStraightRail(StraightRail $rail) {

        $this->straightRails->add($rail);
        return $this;
    }

    /**
     * @param StraightRail $rail
     * @return $this
     */
    public function removeStraightRail(StraightRail $rail) {

        $this->straightRails->removeElement($rail);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getStraightRails() {

        return $this->straightRails;
    }

    /**
     * @param ElectricRail $rail
     * @return $this
     */
    public function addElectricRail(ElectricRail $rail) {

        $this->electricRails->add($rail);
        return $this;
    }

    /**
     * @param ElectricRail $rail
     * @return $this
     */
    public function removeElectricRail(ElectricRail $rail) {

        $this->electricRails->removeElement($rail);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getElectricRails() {

        return $this->electricRails;
    }

    /**
     * @param SwitchRail $rail
     * @return $this
     */
    public function addSwitchRail(SwitchRail $rail) {

        $this->switchRails->add($rail);
        return $this;
    }

    /**
     * @param SwitchRail $rail
     * @return $this
     */
    public function removeSwitchRail(SwitchRail $rail) {

        $this->switchRails->removeElement($rail);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSwitchRails() {

        return $this->switchRails;
    }

    /**
     * @param CurvedRail $rail
     * @return $this
     */
    public function addCurvedRail(CurvedRail $rail) {

        $this->curvedRails->add($rail);
        return $this;
    }

    /**
     * @param CurvedRail $rail
     * @return $this
     */
    public function removeCurvedRail(CurvedRail $rail) {

        $this->curvedRails->removeElement($rail);
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getCurvedRails() {

        return $this->curvedRails;
    }
}
