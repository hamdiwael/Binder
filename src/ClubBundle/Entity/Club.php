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
     * @ORM\ManyToOne(targetEntity="teacher", inversedBy="clubs")
     * @ORM\JoinColumn(name="teacher_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $teacher;


    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }


    /**
     * @Assert\File(maxSize="500k")
     */
    public $file;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $nomImage;

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
     * @var string
     *
     * @ORM\Column(name="members", type="string", length=255)
     */
    private $members;




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

    /**
     * Set members
     *
     * @param string $members
     *
     * @return Club
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members
     *
     * @return string
     */
    public function getMembers()
    {
        return $this->members;
    }










    public function getWebPath()
    {
        return null === $this->nomImage ? null : $this->getUploadDir() . '/' . $this->nomImage;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'images';
    }

    public function uploadProfilePicture()
    {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique
        // nécessaire de le nettoyer pour éviter les problèmes de sécurité

        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // On sauvegarde le nom de fichier
        $this->nomImage = $this->file->getClientOriginalName();

        // La propriété file ne servira plus
        $this->file = null;
    }

    /**
     * Set nomImage
     *
     * @param string $nomImage
     *
     * @return Club
     */
    public function setNomImage($nomImage)
    {
        $this->nomImage = $nomImage;

        return $this;
    }

    /**
     * Get nomImage
     *
     * @return string
     */
    public function getNomImage()
    {
        return $this->nomImage;
    }

    /**
     * @return mixed
     */
    public function getParticipation()
    {
        return $this->participation;
    }

    /**
     * @param mixed $participation
     */
    public function setParticipation($participation)
    {
        $this->participation = $participation;
    }

    /**
     * @ORM\OneToMany(targetEntity="Participation", mappedBy="club")
     */
    private $participation;


}



