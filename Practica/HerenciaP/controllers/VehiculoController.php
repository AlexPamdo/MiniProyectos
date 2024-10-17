<?php
require_once __DIR__ . '/../models/Automovil.php';
require_once __DIR__ . '/../models/Motocicleta.php';

class VehiculoController {
    private $vehiculos = [];

    public function __construct() {
        // Crear algunos vehículos de ejemplo
        $this->vehiculos[] = new Automovil("Toyota", "Corolla", 20000, 4);
        $this->vehiculos[] = new Motocicleta("Honda", "CBR", 10000, 600);
    }

    public function getVehiculos() {
        return $this->vehiculos;
    }
}