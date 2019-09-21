<?php
    spl_autoload_register(function($class){
        #print($class).'<br>';
        require $class.'.php';
    });

    use Models\{Producto,Cliente};

    $p = new Producto();
    $p->create(['name'=>'Pr02','price'=>145.80,'stock'=>10]);
    #$c = new Cliente();
    #$c->all();