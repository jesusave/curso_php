<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class User {

        /**
         * @var int
         */
        public int $id;

        /**
         * @var array
         */
        public array $users;

        public function __construct(int $id)
        {
            $this->id = $id;
            $this->users = array("Juan", "Pedro", "Luis");
        }

        public function getName() : string
        {
            return $this->users[$this->id];
        }

        public function loadAllUsers(): string {
            $resultado = "";
            foreach($this->users as $user){
                $resultado .= "<br>{$user}";
            }

            return $resultado;
        }

        public function searchUser(int $is = null): string {
            return $this->users[$id ?? $this->id];
        }
    }

    $usuario = new User(0);
    var_dump($usuario);
    echo "<br>";

    echo $usuario->id;
    echo "<br>";

    echo "<pre>";
        var_dump($usuario->users);
    echo "</pre>";

    echo "<br>";

    echo $usuario->getName();
    echo "<br>";

    echo $usuario->loadAllUsers();
    echo "<br><br>";

    echo $usuario->searchUser(1);