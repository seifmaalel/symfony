<?php

namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restauration
 *
 * @ORM\Table(name="restauration")
 * @ORM\Entity
 */
class Restauration
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
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="menu", type="string", length=30, nullable=false)
     */
    private $menu;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="page_web", type="string", length=30, nullable=false)
     */
    private $pageWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type;


}
