<?php

namespace CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="CourseBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="courses")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $Subject;



    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="teacher", type="string", length=100)
     */
    private $teacher;

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
     * Set idCo
     *
     * @param integer $idCo
     *
     * @return Course
     */
    public function setIdCo($idCo)
    {
        $this->idCo = $idCo;

        return $this;
    }

    /**
     * Get idCo
     *
     * @return int
     */
    public function getIdCo()
    {
        return $this->idCo;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Course
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
     * Set content
     *
     * @param string $content
     *
     * @return Course
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set teacher
     *
     * @param string $teacher
     *
     * @return Course
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return string
     */
    public function getTeacher()
    {
        return $this->teacher;
    }



}


