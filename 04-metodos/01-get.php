<?php 

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class Producto {
        protected string $nombre;
        protected int $qty;

        public function getName(){
            return $this->nombre;
        }

        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }

        public function __get(string $name)
        {
            if (!property_exists($this, $name)) {
                die("La propiedad {$name} no existe");
            }

            return $this->{$name};
        }
    }

    $producto = new Producto;
    $producto->setNombre("MacBook Pro 2020");

    echo $producto->nombre;