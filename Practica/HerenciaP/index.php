<?php
require_once "controllers/VehiculoController.php";

$controller = new VehiculoController();
$vehiculos = $controller->getVehiculos();


require_once 'views/listar_vehiculos.php';
?>