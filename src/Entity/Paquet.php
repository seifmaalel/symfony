<?php

namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paquet
 *
 * @ORM\Table(name="paquet", indexes={@ORM\Index(name="nom", columns={"nom"})})
 * @ORM\Entity
 */
class Paquet
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
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dÃ©b", type="date", nullable=false)
     */
    private $dateDã©b;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="id_resto", type="integer", nullable=false)
     */
    private $idResto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cafÃ©", type="integer", nullable=false)
     */
    private $idCafã©;

    /**
     * @var int
     *
     * @ORM\Column(name="id_restocafÃ©", type="integer", nullable=false)
     */
    private $idRestocafã©;

    /**
     * @var int
     *
     * @ORM\Column(name="id_zarch", type="integer", nullable=false)
     */
    private $idZarch;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ztour", type="integer", nullable=false)
     */
    private $idZtour;

    /**
     * @var int
     *
     * @ORM\Column(name="id_hotel", type="integer", nullable=false)
     */
    private $idHotel;

    /**
     * @var int
     *
     * @ORM\Column(name="id_transport", type="integer", nullable=false)
     */
    private $idTransport;


}
