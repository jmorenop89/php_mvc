<?php
    namespace Models;
    use Config\Database;

    class Model{
        public $table;
        public $primaryKey;
        protected $connection;
        
        public function __construct(){
            $this->connection = Database::cn();
        }

        public function all(){
            $sql = "select * from $this->table";
            echo $sql;
        }
    }