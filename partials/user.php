<?php
require_once 'connect.php';

class User extends Database {
    protected $tableName="userTable";

    // function to add users
    public function add($data){
        if(!empty($data)){
            $fields=$placeholder=[];
            foreach($data as $field =>$value){
                $fields[]=$field;
                $placeholder[]=":{field}";
            }
        }
        // $sql="INSERT INTO {$this->tableName} (pname,email,phone) VALUES(:pname,:email,:phone)";
        $sql="INSERT INTO {$this->tableName} (". implode(',', $fields).") VALUES (". implode(',',$placeholder).")";

        // SQL INJECTIONS
        $stmt = $this->conn->prepare($sql);
        try{
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId=$this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        }catch(PDOException $e){
            echo "Error:".$e->getMessage();
            $this->conn->rollback();
        }
    }

    // function to get rows
    public function getRows($start=0,$limit=4){
        $sql = "SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $results=[];
        }
        return $results;
    }
}

?>