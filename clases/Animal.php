<?php 
namespace clases;

class Animal 
{
    private string $Name;

    private string $Specie;

    private int $Age;

    /**
     * Get the value of Name
     */ 
    public function getName()
    {
        return $this->Name;
    }
 
    /**
     * Set the value of Name
     *
     * @return  self
     */ 
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get the value of Specie
     */ 
    public function getSpecie()
    {
        return $this->Specie;
    }

    /**
     * Set the value of Specie
     *
     * @return  self
     */ 
    public function setSpecie($Specie)
    {
        $this->Specie = $Specie;

        return $this;
    }

    /**
     * Get the value of Age
     */ 
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Set the value of Age
     *
     * @return  self
     */ 
    public function setAge($Age)
    {
        $this->Age = $Age;

        return $this;
    }
}