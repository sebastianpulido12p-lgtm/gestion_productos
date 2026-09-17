<?php 

require_once __DIR__ . "/../app/controllers/clientesControllers.php"; 
require_once __DIR__ . "/../app/controllers/productoControllers.php"; 
require_once __DIR__ . "/../app/controllers/proveedorControllers.php";
require_once __DIR__ . "/../app/controllers/categoriaControllers.php";


$controller = new ProductoController(); 
$controller->index(); 

$controller = new clientesControllers(); 
$controller->index(); 

$controller = new ProveedorController(); 
$controller->index();

$controller = new categoriaController();
$controller->index();

