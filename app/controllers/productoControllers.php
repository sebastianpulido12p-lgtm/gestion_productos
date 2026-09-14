<?php

require_once __DIR__ . "/../models/producto.php";

class ProductoController {

    public function index() {

        $productoModel = new Producto();
        $productos = $productoModel->getAll();
        $detalleProductos = $productoModel->getById("0 OR 1=1");

        require_once __DIR__ . "/../views/producto/index.php";
    }
}

