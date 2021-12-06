<?php
class Manufacture extends Db{
    public function getAllManu(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addManu($name){
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`) VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute();
    }
    public function deleteManu($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getManuById($id)
    {
        $sql = self::$connection->prepare("SELECT* FROM `manufactures` WHERE `manu_id` = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function editManu($id,$name)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`= ? WHERE `manu_id`= ?");
        $sql->bind_param("si", $name,$id);
        return $sql->execute();
    }
}