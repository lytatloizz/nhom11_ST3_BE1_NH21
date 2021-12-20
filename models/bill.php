<?php

class Bill extends Db{

    public function getBill($name){
        $sql = self::$connection->prepare("SELECT * FROM bill where `name` = ?");
        $sql->bind_param("s", $name);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function insertBill($name,$content,$price){
        $sql = self::$connection->prepare("INSERT INTO `bill`(`name`, `content`, `price`) VALUES (?,?,?)");
        $sql->bind_param("ssi", $name,$content,$price);
        return $sql->execute(); //return an object
    }
    public function deleteBill($id){
        $sql = self::$connection->prepare("DELETE FROM `bill` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function getBillById($id){
        $sql = self::$connection->prepare("SELECT * FROM bill where `id` = ?");
        $sql->bind_param("s", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}