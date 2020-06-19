<?php

namespace BinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pupil
 *
 * @ORM\Table(name="pupils")
 * @ORM\Entity(repositoryClass="BinBundle\Repository\pupilRepository")
 */
class pupil
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
     * @ORM\Column(name="fullname", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday", type="string", length=255)
     */
    private $birthday;
    /**
     * @var int
     *
     * @ORM\Column(name="classes", type="integer")
     */
    private $classes;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="integer")
     */
    private $idparent;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param int $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }

    /**
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @param int $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

    /**
     * @return int
     */
    public function getIdparent()
    {
        return $this->idparent;
    }

    /**
     * @param int $idparent
     */
    public function setIdparent($idparent)
    {
        $this->idparent = $idparent;
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

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
