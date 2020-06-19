<?php

namespace ExamsBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * exam
 *
 * @ORM\Table(name="exam")
 * @ORM\Entity(repositoryClass="ExamsBundle\Repository\examRepository")
 */
class exam
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idE;

    /**
     * @var string
     * @Assert\NotBlank

     * @ORM\Column(name="subject", type="string", length=255)
     */



    private $subject;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;


    /**
     * Get idE
     *
     * @return int
     */
    /**
     * @var string
     * @Assert\File(
     *   maxSize = "1024k",
     *   mimeTypes = {"application/pdf", "application/x-pdf"},
     *   mimeTypesMessage = "Please upload a valid PDF")
     * @ORM\Column(name="file", type="string", length=255)
     */
    private $file;

    public function getIdE()
    {
        return $this->idE;
    }
    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return exam
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return exam
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }



    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return exam
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

}

