<?php
require_once(__DIR__ . '/../config/Database.php');
require_once(__DIR__ . '/../models/Propietario.php');

class Propietario{
  private $pdo = null;

  public function __construct(){
    $this->pdo = Database::getConexion();
  }


  public function getAll(): array{
    $sql = "
    SELECT 
        PR.idpropietario,
        CONCAT(PR.apellidos, ' ', PR.nombre) AS propietario,
        MA.idmascota,
        MA.nombre AS nombre_mascota,
        MA.tipo
    FROM propietarios PR
    INNER JOIN mascotas MA ON PR.idpropietario = MA.idpropietario
    ORDER BY PR.idpropietario, MA.nombre;
    ";
    $query = $this->pdo->prepare($sql);
    $query->execute();
    //FETCH_CLASS (Colección de objetos)
    //FETCH_ASSOC (Colección de arrays asociativos)
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

}