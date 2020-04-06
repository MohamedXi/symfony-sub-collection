<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Departement
{
    private $name;
    private $villes;

    public function __construct()
    {
        $this->villes = new ArrayCollection();
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

    /**
     * @return ArrayCollection
     */
    public function getVilles()
    {
        return $this->villes;
    }

    /**
     * @return ArrayCollection
     */
    public function setVilles(iterable $villes)
    {
        return $this->villes = new ArrayCollection(is_array($villes) ? $villes : iterator_to_array($villes));
    }
}
