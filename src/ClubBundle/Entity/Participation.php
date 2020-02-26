<?php

namespace ClubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Participation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity(repositoryClass="ClubBundle\Repository\ParticipationRepository")
 */
class Participation
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPupil()
    {
        return $this->pupil;
    }

    /**
     * @param mixed $pupil
     */
    public function setPupil($pupil)
    {
        $this->pupil = $pupil;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Pupil", inversedBy="participation")
     * @ORM\JoinColumn(name="Pupil_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $pupil;

    /**
     * @ORM\ManyToOne(targetEntity="Club", inversedBy="participation")
     * @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $club;


}

