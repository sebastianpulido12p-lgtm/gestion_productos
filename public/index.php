<?php
require_once __DIR__ . "/../app/controllers/productoControllers.php";

$productoController = new productoController();
$productoController->index();