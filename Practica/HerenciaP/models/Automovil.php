<?php

require_once("./models/interface.php");
require_once("./models/Vehiculos.php");

class Automovil extends VehiculosModel implements Impuesto
{
    private $puertas;
    public function __construct($marca,$modelo,$precio,$puertas)
    {
        parent::__construct($marca, $modelo, $precio);
        $this->puertas = $puertas;
    }

    public function calcularImpuesto(){
        return $this->precio + ($this->precio * 0.20);
    }
    public function mostrarDetalles() {
        return [
            'tipo' => "Automovil",
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'precio' => $this->precio,
            'descuento' => $this->calcularImpuesto(),
        ];
    }
}
