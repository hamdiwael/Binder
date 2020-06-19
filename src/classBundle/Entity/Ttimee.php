<?php

namespace classBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ttimee
 *
 * @ORM\Table(name="ttime")
 * @ORM\Entity(repositoryClass="classBundle\Repository\TtimeRepository")
 */
class Ttimee
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
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time;
    /**
     * @ORM\ManyToOne(targetEntity="classe")
     * @ORM\JoinColumn(name="classe",referencedColumnName="id")
     */
    private $classe;

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
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
     * Set subject
     *
     * @param string $subject
     *
     * @return Ttimee
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Ttimee
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}

