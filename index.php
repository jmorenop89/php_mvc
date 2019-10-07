<?php
    // display errors
    ini_set('display_errors', 1);
    spl_autoload_register(function($class){
        $class = str_replace('\\',DIRECTORY_SEPARATOR,$class);
        require __DIR__.DIRECTORY_SEPARATOR.$class.'.php';
    });

   use Controllers\ProductoController;
   
   $p = new ProductoController();
   $p->index();
   
   

