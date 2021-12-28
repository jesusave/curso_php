<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    abstract class AbstractUser {

        public function firstName(string $nombre) : string {
            return $nombre;
        }

        public function lastName(string $apellido) : string {
            return $apellido;
        }

        abstract public function age(int $edad) : int;
    }

    class MyUser extends AbstractUser {

        public function age(int $edad): int {
            return $edad;
        }
    }

    $usuario = new MyUser;
    echo sprintf('%s %s %d', $usuario->firstName('Jesus'), $usuario->lastName('Avelar'), $usuario->age(31));