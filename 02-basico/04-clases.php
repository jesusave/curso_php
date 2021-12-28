<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    class Database {
        public string $name = "testBD";

        public function __construct(){
            
        }

        public function select(): string {
            return "SELECT * FROM usuarios";
        }

    }

    class Usuario {
        
        protected Database $database;

        /**
         * @param Database $database
         */
        public function __construct(Database $database)
        {
            $this->database = $database;
        }

        public function __toString()
        {
            return serialize($this->database);
        }

        public function selectUser() : string {
           return $this->database->select();
        }
    }

    $db = new Database;
    $user = new Usuario($db);
    echo "<pre>";
        var_dump($user);
    echo "</pre>";

    echo "<br>";

    echo $user;
    echo "<br>";

    echo $user->selectUser();