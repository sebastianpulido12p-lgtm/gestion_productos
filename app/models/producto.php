<?php

require_once __DIR__ . "/../../config/Database.php";

class Producto
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
                    producto.id_producto,
                    producto.nombre AS producto_nombre,
                    producto.precio,
                    producto.categoria AS producto_categoria,
                    proveedores.nombre AS proveedor_nombre
                FROM producto
                INNER JOIN proveedores
                    ON producto.id_proveedor = proveedores.idproveedores";

        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}