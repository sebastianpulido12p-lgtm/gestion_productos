<?php 
  
require_once __DIR__ . "/../../config/Database.php"; 
 
class Proveedor { 
    private $connection; 
 
    public function __construct() { 
        try {
            $db = new Database(); 
            $this->connection = $db->connect(); 
        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
        }
    } 
 
    public function getAll() { 
        try {
            $sql = "SELECT * FROM proveedores"; 
 
            $consulta = $this->connection->query($sql); 
            return $consulta->fetchAll(PDO::FETCH_ASSOC); 
        } catch (PDOException $e) {
            echo "Error al obtener los proveedores: " . $e->getMessage();
            return [];
        }
    } 
}