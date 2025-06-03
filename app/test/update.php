<?php

require_once '../models/Mascota.php';

$mascota = new Mascota();

$parametros = [
    'idpropietario' => 2,
    'tipo' => 'Gato',
    'nombre' => 'Karim',
    'color' => 'Blanco',
    'genero' => 'macho',
    'idmascota' => 5
];

$num = $mascota->update($parametros); 
var_dump($num);
