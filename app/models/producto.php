<?php 
require_once __DIR__ . "/../../config/Database.php";

class producto {
    private $connection;


public function __construct() {
    $database  = new Database();
    $this->connection = $database->connect();
}


public function getALL() {
    $sql = "SELECT * FROM productos";

    $consulta = $this->connection->query ($sql);
    return $consulta->fetchAll(PDO::FETCH_ASSOC);

}


}
