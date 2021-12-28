<?php 

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class Vehiculo {
        protected array $piezas = [];
        
        public function __set(string $name, string $value)
        {
            $this->piezas[$name] = $value;
        }
    }

    $vehiculo = new Vehiculo();
    $vehiculo->ruedas = 4;

    echo "<pre>";
        var_dump($vehiculo);
    echo "</pre>";