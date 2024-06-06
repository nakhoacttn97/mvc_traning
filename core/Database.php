<?php

class Database{
    private $__conn;

    function __construct(){
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);
        //var_dump($this->__conn);
    }

    function insert($table, $data){
        if(!empty($data)){
            $filedStr = '';
            $valueStr = '';
            foreach($data as $key => $value){
                $filedStr.=$key.',';
                $valueStr.="'".$value."',";
            }
            $filedStr = rtrim($filedStr, ',');
            $valueStr = rtrim($valueStr, ',');

            $sql = "INSERT INTO $table($filedStr) VALUES ($valueStr)";
            $status = $this->query($sql);

            if($status){
                return true;
            }
        }

        return false;
    }

    function update($table, $data, $condition = ''){
        
        if(!empty($data)){
            $updateStr = '';
            foreach($data as $key => $value){
                $updateStr.="$key='$value'";
            }

            $updateStr = rtrim($updateStr, ',');

            if(!empty($condition)){
                $sql = "UPDATE $table SET $updateStr WHERE $condition";
            }else{
                $sql = "UPDATE $table SET $updateStr";
            }

            $status = $this->query($sql);

            if($status){
                return true;
            }
        }
        return false;
    }

    function query($sql){

        $statement = $this->__conn->prepare($sql);

        $statement->execute();

        return $statement;
    }

    function lastInsertId(){
        return $this->__conn->lastInsertId();
    }
}