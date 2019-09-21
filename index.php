<?php
    spl_autoload_register(function($class){
        #print($class).'<br>';
        require $class.'.php';
    });

    use Models\{Producto,Cliente};

    $p = new Producto();
    echo $p->create(['name'=>'Pr01','price'=>145.80,'stock'=>10]);
    #$c = new Cliente();
    #$c->all();