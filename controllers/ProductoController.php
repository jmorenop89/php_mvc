<?php
    namespace Controllers;
    use Models\Producto;

    class ProductoController{

        public function index(){
            $model = new Producto();
            $list = $model->all();
            require('views/producto/index.php');
        }
    }