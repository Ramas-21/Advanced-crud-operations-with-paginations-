<?php

class Database
{
    // PHP OOP
    private $dbServer = "localhost";
    private $dbUser = "root";
    private $dbPassword = "";
    private $dbName = "userdata";
    protected $conn;

    // A constructor
    public function __construct()
    {
        try{
            $databaseConnect = "mysql:host={$this->dbServer};databaseName={$this->dbName};
            charset=utf8";
            $options=array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($databaseConnect, $this->dbUser, $this->dbPassword, $options);
        }

    }
}
?>