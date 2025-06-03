<?php

require_once '../entities/Mascota.entidad.php';
require_once '../models/Mascota.php';

//Entidad = CONTENEDOR DATOS
$entidad = new MascotaEntidad();
$entidad->__SET('idpropietario', 1);
$entidad->__SET('tipo', 'Gato');
$entidad->__SET('nombre', 'Bills');
$entidad->__SET('color', 'Gris');
$entidad->__SET('genero', 'macho');


//Modelo = acción/lógica backend
$mascota = new Mascota();
$idgenerado = $mascota->create($entidad);
var_dump($idgenerado);
