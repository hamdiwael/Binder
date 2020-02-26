<?php

namespace CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject")
 * @ORM\Entity(repositoryClass="CourseBundle\Repository\SubjectRepository")
 */
class Subject
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
     * @var int
     *
     * @ORM\Column(name="idSu", type="integer", unique=true)
     */
    private $idSu;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="teachers", type="string", length=255)
     */
    private $teachers;

    /**
     * @var string
     *
     * @ORM\Column(name="classes", type="string", length=100)
     */
    private $classes;


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
     * Set idSu
     *
     * @param integer $idSu
     *
     * @return Subject
     */
    public function setIdSu($idSu)
    {
        $this->idSu = $idSu;

        return $this;
    }

    /**
     * Get idSu
     *
     * @return int
     */
    public function getIdSu()
    {
        return $this->idSu;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Subject
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
     * Set teachers
     *
     * @param string $teachers
     *
     * @return Subject
     */
    public function setTeachers($teachers)
    {
        $this->teachers = $teachers;

        return $this;
    }

    /**
     * Get teachers
     *
     * @return string
     */
    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * Set classes
     *
     * @param string $classes
     *
     * @return Subject
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;

        return $this;
    }

    /**
     * Get classes
     *
     * @return string
     */
    public function getClasses()
    {
        return $this->classes;
    }

    public function __toString()
    {
        return $this->getName();
    }

}

