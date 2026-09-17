<?php

require_once __DIR__ . "/../models/producto.php";

class ProductoController
{
    public function index()
    {
        $productoModel = new Producto();

        $productos = $productoModel->getAll();
        $detalleProducto = $productoModel->getById(4);

        require_once __DIR__ . "/../views/producto/index.php";
    }
}
