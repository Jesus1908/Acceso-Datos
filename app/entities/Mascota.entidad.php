<?php
/**
 * La entidad contiene todos los atributos de las clases
 */
class MascotaEntidad{
  private $idmascota;
  private $idpropietario;
  private $tipo;
  private $nombre;
  private $color;
  private $genero;
  private $vive;

  public function __GET($atributo): mixed{
    return $this->$atributo;
  }

  public function __SET($atributo, $valor): void{
    $this->$atributo = $valor;
  }
}