<?php

require_once __DIR__ . "/../../config/Database.php";

class Cliente {
    private $connection;

    public function __construct(){
        $db = new Database();
        $this->connection = $db->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM cliente";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}