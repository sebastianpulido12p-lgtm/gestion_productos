<?php

require_once __DIR__ . "/../models/categoria.php";

class categoriaController
{
    public function index()
    {
        $categoriaModel = new categoria();

        $categorias = $categoriaModel->getAll();

        $categoriaConsultada = $categoriaModel->getById(3);

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}