<?php
require_once 'connect.php';

class User extends Database {
    protected $tableName="usertable";

    // function to add users
    public function add($data){
        if(!empty($data)){
            $fields=$placeholder=[];
            foreach($data as $field =>$value){
                $fields[]=$field;
                $placeholder[]=":{$field}";
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
        $sql = "SELECT * FROM {$this->tableName} ORDER BY name DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results=[];
        }
        return $results;
    }

    // function to get single row
    public function getRow($field,$value){
        $sql = "SELECT * FROM {$this->tableName} WHERE {$field}=:{$field}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result=[];
        }
        return $result;
    }

    // function to count number of rows
    public function getCount(){
        $sql = "SELECT count(*) as pcount FROM {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);

        return $result['pcount'];
    }

    // function to upload image
    public function uploadPhoto($file){
        if(!empty($file)){
            $path = $file['temporary_name'];
            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.',$fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time().$fileName) . '.' . $fileExtension;
            $allowedExtension = ["png","jpg","jpeg"];

            if(in_array($fileExtension,$allowedExtension)){
                $uploadFileDir = getcwd().'/uploads/';
                $destinationFilePath = $uploadFileDir . $newFileName;
                if(move_uploaded_file($path,$destinationFilePath)){
                    return $newFileName;
                }
            }
        }
    }
}
