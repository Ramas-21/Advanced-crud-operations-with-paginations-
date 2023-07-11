<?php
require_once 'connect.php';

class User extends Database{
    protected $tableName="userTable";

    // function to add users
    public function add($data){
        $sql="INSERT INTO {$this->tableName} (pname,email,phone) VALUES(:pname,:email,:phone)";
    }
}
?>