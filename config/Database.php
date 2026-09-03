<?php 

class Database {
   private $host;
   private $port;
   private $db_name;
   private $username;
   private $password;
   private $connection;

   public function __construct () {
        $env = parse_ini_file(__DIR__ . "/../.env");
        $this->host = $env["DB_HOST"];
        $this->port = $env["DB_PORT"];
        $this->db_name = $env["DB_NAME"];
        $this->username = $env["DB_USER"];
        $this->password = $env["DB_PASS"];
}


public function connect() {
    $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db_name};username={$this->username};password={$this->password}";

    $this->connection = new PDO($dsn,$this->username,$this->password);


    return $this->connection;
    
    



}
}
