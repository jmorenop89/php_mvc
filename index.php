<?php
    spl_autoload_register(function($class){
        #print($class).'<br>';
        require $class.'.php';
    });

    use Models\{Producto,Cliente};

    $p = new Producto();
    $p->all();
    #$c = new Cliente();
    #$c->all();