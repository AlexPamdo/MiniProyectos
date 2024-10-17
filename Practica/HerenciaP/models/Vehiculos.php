<?php

abstract class VehiculosModel{
    protected $marca;
    protected $modelo;
    protected $precio;

    public function __construct($marca,$modelo,$precio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    abstract public function mostrarDetalles();
}