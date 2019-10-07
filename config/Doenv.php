<?php
    namespace Config;

    class Doenv{
        public static $file = ".env";

         public static function init(){
             $content = parse_ini_file(self::$file, true);
             $_ENV = var_export($content, true);
         }
    }