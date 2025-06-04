<?php
/**
 * La entidad contiene todos los atributos de las clases
 */
class PropietarioEntidad{
  private $idpropietario;
  private $apellidos;
  private $nombre;

  public function __GET($atributo): mixed{
    return $this->$atributo;
  }

  public function __SET($atributo, $valor): void{
    $this->$atributo = $valor;
  }
}