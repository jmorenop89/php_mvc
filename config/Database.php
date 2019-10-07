<?php

    namespace Config;
    
    class Database{

        public static function cn(){
            Doenv::init();
            $cn = new \mysqli(env('DB_HOST'),env('DB_USER'),env('DB_PASS'),env('DB_NAME'));
            return $cn;
        }
    }