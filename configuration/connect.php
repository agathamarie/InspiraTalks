<?php

    define('HOST','localhost');
    define('DATABASE','inspiraTalks');
    define('USER','root');
    define('PASSWORD','root');

    class Connect{
        private $connection;

        function __construct(){
            $this->connectDatabase();
        }

        function connectDatabase(){
            try{
                $this->connection = new PDO('mysql:host='.HOST.';dbname'.DATABASE. USER. PASSWORD);
            }
            catch(PDOException $e){
                echo "Error!: ".$e->getMessage();
                die();
            }
        }

        public function getConnection() {
            return $this->connection;
        }
    }
?>