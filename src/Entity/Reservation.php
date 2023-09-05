<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", uniqueConstraints={@ORM\UniqueConstraint(name="cleetranger", columns={"idRz"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     * @Assert\NotBlank
     * @Assert\GreaterThan("today")
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     * 
     * 
     * @Assert\Expression(
   *     "this.getDateDebut() < this.getDateFin()",
   *     message="La date fin ne doit pas être antérieure à la date début"
   * )
     * @Assert\NotBlank
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var int
     * @Assert\Positive
     * @Assert\NotBlank
     * @ORM\Column(name="nbPlace", type="integer", nullable=false)
     */
    private $nbplace;

    /**
     * @var \ZoneDeLoisir
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="ZoneDeLoisir")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRz", referencedColumnName="id")
     * })
     */
    private $idrz;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getNbplace(): ?int
    {
        return $this->nbplace;
    }

    public function setNbplace(int $nbplace): self
    {
        $this->nbplace = $nbplace;

        return $this;
    }

    public function getIdrz(): ?ZoneDeLoisir
    {
        return $this->idrz;
    }

    public function setIdrz(?ZoneDeLoisir $idrz): self
    {
        $this->idrz = $idrz;

        return $this;
    }


}
