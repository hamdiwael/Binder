<?php

namespace ClubBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="ClubBundle\Repository\ClubRepository")
 */
class Club
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;



    /**
     * @var string
     *
     * @ORM\Column(name="specialty", type="string", length=255)
     */
    private $specialty;

    /**
     * @var string
     *
     * @ORM\Column(name="responsible", type="string", length=255)
     */
    private $responsible;






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
     * @return Club
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
     * Set specialty
     *
     * @param string $specialty
     *
     * @return Club
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;

        return $this;
    }




    /**
     * Get specialty
     *
     * @return string
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Set responsible
     *
     * @param string $responsible
     *
     * @return Club
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get responsible
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }








}


