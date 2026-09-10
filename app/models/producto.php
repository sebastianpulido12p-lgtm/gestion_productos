<?php

require_once __DIR__ . "/../../config/Database.php";

class producto
{
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT
                    producto.nombre AS producto_nombre,
                    producto.precio,
                    producto.categoria AS producto_categoria,
                    producto.id_proveedor,
                    proveedores.nombre AS proveedor_nombre
                FROM producto
                INNER JOIN proveedores
                ON producto.id_proveedor = proveedores.idproveedores";
    $consulta = $this->connection->query($sql);
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT
                    producto.id_producto,
                    producto.nombre AS producto_nombre,
                    producto.precio,
                    producto.categoria AS producto_categoria,
                    producto.id_proveedor,
                    proveedores.nombre AS proveedor_nombre
                FROM producto
                INNER JOIN proveedores
                ON producto.id_proveedor = proveedores.idproveedores
                WHERE producto.id_producto = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}