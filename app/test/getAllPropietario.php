<?php

require_once '../models/Propietario.php';
$propietario = new Propietario();
var_dump($propietario->getAll());