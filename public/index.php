<?php
require_once __DIR__ . "/../app/controllers/clientesControllers.php";
require_once __DIR__ . "/../app/controllers/productoControllers.php";

$controller = new ProductoController();
$controller->index();
$controller = new clientesControllers();
$controller->index();

