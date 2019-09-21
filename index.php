<?php
    spl_autoload_register(function($class){
        require $class.'.php';
    });

    use Models\{Producto,Cliente};

    $p = new Producto();
    $p->all();
    echo '<br>';
    $c = new Cliente();
    $c->all();