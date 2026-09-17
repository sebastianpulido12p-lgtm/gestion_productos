<?php 
 
require_once __DIR__ . "/../../config/Database.php"; 
 
class categoria 
{ 
    private $connection; 
 
    public function __construct() 
    { 
        try { 

            $db = new Database(); 
            $this->connection = $db->connect(); 
 
        } catch (PDOException $e) { 
            echo "Error al conectar: " . $e->getMessage(); 
        } 
    } 
 
 
 
    public function getAll() 
    { 
        try { 
            $sql = "SELECT 
                        id_categoria, 
                        nombre, 
                        descripcion 
                    FROM categoria"; 
            $consulta = $this->connection->query($sql); 
            return $consulta->fetchAll(PDO::FETCH_ASSOC); 
 
        } catch (PDOException $e) { 
    echo "Error con la informacion categorias: " . $e->getMessage(); 
     return []; 

     } 
    } 
 
    public function getById($id) 
    { 
        try { 
            $sql = "SELECT 
                    id_categoria, 
                    nombre, 
                    descripcion 
            FROM categoria 
            WHERE id_categoria = :id"; 
 
            $stmt = $this->connection->prepare($sql); 
            $stmt->execute([':id' => $id]); 
 
            return $stmt->fetch(PDO::FETCH_ASSOC); 
        } catch (PDOException $e) { 
            echo "Error al obtener la categoria: " . $e->getMessage();
            return false; 

 } 
 } 
}