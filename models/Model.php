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
            $list = $this->connection->query($sql)->fetch_all(MYSQLI_ASSOC);
            var_dump($list);
        }
    }