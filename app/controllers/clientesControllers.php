<?php

require_once __DIR__ . "/../models/cliente.php";

class clientesControllers {

    public function index() {

        $cliente = new Cliente();
        $clientes = $cliente->getAll();

        require_once __DIR__ . "/../views/clientes/index.php";
    }
}