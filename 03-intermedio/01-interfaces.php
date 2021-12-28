<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    interface ICrud {
        public function get() : string;
        public function find(int $id) : string;
        public function create(array $array) : string;
        public function update(array $array) : string;
        public function delete(int $id) : string;
    }

    class Crud implements ICrud {

        public function get(): string
        {
            // TODO: Implement get() method.
            return "Obtener todos los usuarios";
        }

        public function find(int $id): string
        {
            // TODO: Implement find() method.
            return "Buscar usuarios {$id}";
        }

        public function create(array $array): string
        {
            // TODO: Implement create() method.
            return serialize($array);
        }

        public function update(array $array): string
        {
            // TODO: Implement update() method.
            return serialize($array);
        }

        public function delete(int $id): string
        {
            // TODO: Implement delete() method.
            return "Eliminar usuario {$id}";
        }
    }

    $crud = new Crud;
    echo $crud->get();
    echo "<br>";

    echo $crud->find(1);
    echo "<br>";

    echo $crud->create(['Jesus', 31]);
    echo "<br>";

    echo $crud->update([1, 'Jesus', 31]);
    echo "<br>";

    echo $crud->delete(1);
    echo "<br>";