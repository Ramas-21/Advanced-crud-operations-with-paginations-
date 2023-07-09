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
            $databaseConnect = "mysql:host={$this->dbServer};dbName={$this->dbName};
            charset=utf8";
            $options=array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($databaseConnect, $this->dbUser, $this->dbPassword, $options);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "There was a connection error".$e->getMessage();
        }
    }
}
?>