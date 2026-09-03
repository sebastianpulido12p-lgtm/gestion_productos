<?php 
require_once __DIR__ . "/../models/producto.php";

class productoController {
    public function index() {
        $producto = new producto();
        $productos = $producto->getALL();

        
        require_once __DIR__ . "/../views/producto/index.php";


    }



}
