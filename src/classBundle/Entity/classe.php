<?php

namespace classBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * classe
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity(repositoryClass="classBundle\Repository\classeRepository")
 */
class classe
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
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=10)
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=10)
     * @ORM\Column(name="session", type="string", length=255)

     */
    private $nbPupils;
    /**
     * @ORM\OneToOne(targetEntity="timetable", mappedBy="classe")
*/
    private $timetable;

    /**
     * @return mixed
     */
    public function getTimetable()
    {
        return $this->timetable;
    }

    /**
     * @param mixed $timetable
     */
    public function setTimetable($timetable)
    {
        $this->timetable = $timetable;
    }


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
     * Set nom
     *
     * @param string $nom
     *
     * @return classe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nbPupils
     *
     * @param integer $nbPupils
     *
     * @return classe
     */
    public function setNbPupils($nbPupils)
    {
        $this->nbPupils = $nbPupils;

        return $this;
    }

    /**
     * Get nbPupils
     *
     * @return int
     */
    public function getNbPupils()
    {
        return $this->nbPupils;
    }
}

