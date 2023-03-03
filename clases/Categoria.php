<?php
class Categoria 
{
private string $IdCategoria;

private string $NombreCategoria;



/**
 * Get the value of NombreCategoria
 */ 
public function getNombreCategoria()
{
return $this->NombreCategoria;
}

/**
 * Set the value of NombreCategoria
 *
 * @return  self
 */ 
public function setNombreCategoria($NombreCategoria)
{
$this->NombreCategoria = $NombreCategoria;

return $this;
}

/**
 * Get the value of IdCategoria
 */ 
public function getIdCategoria()
{
return $this->IdCategoria;
}

/**
 * Set the value of IdCategoria
 *
 * @return  self
 */ 
public function setIdCategoria($IdCategoria)
{
$this->IdCategoria = $IdCategoria;

return $this;
}
}