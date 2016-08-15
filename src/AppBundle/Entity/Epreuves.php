<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuves
 *
 * @ORM\Table(name="epreuves")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpreuvesRepository")
 */
class Epreuves
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=255)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="athletes", type="string", length=255)
     */
    private $athletes;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Epreuves
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Epreuves
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set athletes
     *
     * @param string $athletes
     *
     * @return Epreuves
     */
    public function setAthletes($athletes)
    {
        $this->athletes = $athletes;

        return $this;
    }

    /**
     * Get athletes
     *
     * @return string
     */
    public function getAthletes()
    {
        return $this->athletes;
    }
}

