<?php
    namespace Models;
    use Config\Database;

    class Model{
        public $table;
        public $primaryKey = 'id';
        protected $connection;
        
        public function __construct(){
            $this->connection = Database::cn();
        }

        public function all(){
            $sql = "select * from $this->table";
            $list = $this->connection->query($sql)->fetch_all(MYSQLI_ASSOC);
            return $list;
        }

        public function create($data){
            $cand = '';
            $pre = '';
            foreach($data as $v){
                if(gettype($v) == 'string'){
                    $cand.= $pre."'".$v."'";
                }else{
                    $cand.= $pre.$v;
                }
                $pre=',';
            }
            $fields = implode(',',array_keys($data));
            $sql = "insert into $this->table (id,$fields) values(null,$cand)";
            return $this->connection->query($sql);
        }
    }