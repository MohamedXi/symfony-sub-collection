<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Region
{
    private $name;
    private $departements;

    public function __construct()
    {
        $this->departements = new ArrayCollection();
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
    public function getDepartements()
    {
        return $this->departements;
    }

    /**
     * @return ArrayCollection
     */
    public function setDepartements(iterable $departements)
    {
        return $this->departements = new ArrayCollection(is_array($departements) ? $departements : iterator_to_array($departements));
    }
}
