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
    }
}

?>