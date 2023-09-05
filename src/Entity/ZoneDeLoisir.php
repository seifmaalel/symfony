<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ZoneDeLoisir
 *
 * @ORM\Table(name="zone_de_loisir")
 * @ORM\Entity
 */
class ZoneDeLoisir
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
     * @var string
     * 
     * 
     * @Assert\NotBlank
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *@Assert\NotBlank
     * @ORM\Column(name="adresse", type="string", length=30, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *  @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotBlank
     * @ORM\Column(name="tel", type="string", length=30, nullable=false)
     */
    private $tel;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="prix", type="string", length=30, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *  @Assert\NotBlank
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type;

    /**
     * @var string
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @Assert\NotBlank
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     * @Assert\NotBlank
     * @Assert\Positive
     * @ORM\Column(name="nbPlace", type="integer", nullable=false)
     */
    private $nbplace;

    /**
     * @var int
     * @Assert\Expression(
   *     "this.getNbmax() >this.getNbplace()",
   *     message="La nbre min  ne doit pas être superieur à la nbre max "
   * )
     * @Assert\Positive
     * @Assert\NotBlank
     * @ORM\Column(name="nbmax", type="integer", nullable=false)
     */
    private $nbmax;

    /**
     * @var string
     
     * @ORM\Column(name="image", type="string", nullable=false)
     * @Assert\File(mimeTypes={ "image/jpeg" , "image/png","image/jpg","image/GIF" })
     * @Assert\NotBlank(message="Champ ne doit pas être vide!")
     */
    private $image;


    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function __toString(){
        return $this->nom;
    }
    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getNbmax(): ?int
    {
        return $this->nbmax;
    }

    public function setNbmax(int $nbmax): self
    {
        $this->nbmax = $nbmax;

        return $this;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

}
