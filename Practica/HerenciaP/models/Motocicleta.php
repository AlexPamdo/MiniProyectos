<?php

require_once("./models/interface.php");
require_once("./models/Vehiculos.php");

class Motocicleta extends VehiculosModel implements Impuesto
{
    private $cilindrada;
    public function __construct($marca,$modelo,$precio,$cilindrada)
    {
        parent::__construct($marca, $modelo, $precio);
        $this->cilindrada = $cilindrada;
    }

    public function calcularImpuesto(){
        return $this->precio + ($this->precio * 0.10);
    }
    public function mostrarDetalles() {
        return [
            'tipo' => "Motocicleta",
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'precio' => $this->precio,
            'descuento' => $this->calcularImpuesto(),
        ];
    }
}
