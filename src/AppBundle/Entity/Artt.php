<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artt
 *
 * @ORM\Table(name="artt")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArttRepository")
 */
class Artt
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
     * @ORM\Column(name="mois", type="integer")
     */
    private $mois;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="exceptionnelAquis", type="integer")
     */
    private $exceptionnelAquis;

    /**
     * @var float
     *
     * @ORM\Column(name="exceptionnelPris", type="float")
     */
    private $exceptionnelPris;

    /**
     * @var int
     *
     * @ORM\Column(name="congesAquis", type="integer")
     */
    private $congesAquis;

    /**
     * @var float
     *
     * @ORM\Column(name="congesPris", type="float")
     */
    private $congesPris;

    /**
     * @var float
     *
     * @ORM\Column(name="arttAquis", type="float")
     */
    private $arttAquis;

    /**
     * @var float
     *
     * @ORM\Column(name="arttPris", type="float")
     */
    private $arttPris;


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
     * Set mois
     *
     * @param integer $mois
     *
     * @return Artt
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return integer
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Artt
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set exceptionnelAquis
     *
     * @param integer $exceptionnelAquis
     *
     * @return Artt
     */
    public function setExceptionnelAquis($exceptionnelAquis)
    {
        $this->exceptionnelAquis = $exceptionnelAquis;

        return $this;
    }

    /**
     * Get exceptionnelAquis
     *
     * @return int
     */
    public function getExceptionnelAquis()
    {
        return $this->exceptionnelAquis;
    }

    /**
     * Set exceptionnelPris
     *
     * @param float $exceptionnelPris
     *
     * @return Artt
     */
    public function setExceptionnelPris($exceptionnelPris)
    {
        $this->exceptionnelPris = $exceptionnelPris;

        return $this;
    }

    /**
     * Get exceptionnelPris
     *
     * @return float
     */
    public function getExceptionnelPris()
    {
        return $this->exceptionnelPris;
    }

    /**
     * Set congesAquis
     *
     * @param integer $congesAquis
     *
     * @return Artt
     */
    public function setCongesAquis($congesAquis)
    {
        $this->congesAquis = $congesAquis;

        return $this;
    }

    /**
     * Get congesAquis
     *
     * @return int
     */
    public function getCongesAquis()
    {
        return $this->congesAquis;
    }

    /**
     * Set congesPris
     *
     * @param float $congesPris
     *
     * @return Artt
     */
    public function setCongesPris($congesPris)
    {
        $this->congesPris = $congesPris;

        return $this;
    }

    /**
     * Get congesPris
     *
     * @return float
     */
    public function getCongesPris()
    {
        return $this->congesPris;
    }

    /**
     * Set arttAquis
     *
     * @param float $arttAquis
     *
     * @return Artt
     */
    public function setArttAquis($arttAquis)
    {
        $this->arttAquis = $arttAquis;

        return $this;
    }

    /**
     * Get arttAquis
     *
     * @return float
     */
    public function getArttAquis()
    {
        return $this->arttAquis;
    }

    /**
     * Set arttPris
     *
     * @param float $arttPris
     *
     * @return Artt
     */
    public function setArttPris($arttPris)
    {
        $this->arttPris = $arttPris;

        return $this;
    }

    /**
     * Get arttPris
     *
     * @return float
     */
    public function getArttPris()
    {
        return $this->arttPris;
    }

    /**
     * Libellé du mois
     *
     * @return string
     */
    public function getLibelleMois()
    {
        $libelle = [
            1 => 'Janvier',
            2 => 'Février',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9 => 'Septembre',
            10 => 'Octobre',
            11 => 'Novembre',
            12 => 'Décembre'
        ];

        return $libelle[$this->mois];
    }
}

