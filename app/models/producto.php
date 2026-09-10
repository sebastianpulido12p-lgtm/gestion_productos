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
                    producto.id_categoria,
                    categoria.nombre AS categoria_nombre,
                    producto.id_proveedor,
                    proveedores.nombre AS proveedor_nombre
                FROM producto
                INNER JOIN proveedores
                ON producto.id_proveedor = proveedores.idproveedores
                INNER JOIN categoria
                    ON producto.id_categoria = categoria.id_categoria";

    $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getById($id)
    {
        $sql = "SELECT
                    producto.id_producto,
                    producto.nombre AS producto_nombre,
                    producto.precio,
                    producto.id_categoria,
                    categoria.nombre AS categoria_nombre,
                    producto.id_proveedor,
                    proveedores.nombre AS proveedor_nombre
                FROM producto
                INNER JOIN proveedores
                    ON producto.id_proveedor = proveedores.idproveedores
                INNER JOIN categoria
                    ON producto.id_categoria = categoria.id_categoria
                WHERE producto.id_producto = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}