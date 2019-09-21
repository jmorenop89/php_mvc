<?php
    spl_autoload_register(function($class){
        #print($class).'<br>';
        require $class.'.php';
    });

   use Controllers\ProductoController;

   $p = new ProductoController();
   $p->index();