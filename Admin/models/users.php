<?php

class Users extends Db{

    public function getAllUser(){
        $sql = self::$connection->prepare("SELECT * FROM users");
        //$sql->bind_param("ss", $username, $password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getUserById($id)
    {
        $sql = self::$connection->prepare("SELECT* FROM users WHERE id_users = ? ");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editUser($id,$name,$pass,$full_name,$email,$type)
    {
        $sql = self::$connection->prepare("UPDATE `users` SET `username_users`= ? ,
        `password_users`= ?, `fullname_users`= ?, `email_users`= ?, `loai`= ? WHERE `id_users`= ?");
        $sql->bind_param("sssssi", $name,$pass,$full_name,$email,$type,$id);
        return $sql->execute();
    }
    public function deleteUser($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `users` WHERE `id_users` = ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function addUser($name,$pass,$full_name,$email,$type){
        $sql = self::$connection->prepare("INSERT INTO `users`(`username_users`, `password_users`, `fullname_users`, `email_users`, `loai`)
         VALUES (?,?,?,?,?)");
        $sql->bind_param("sssss", $name,$pass,$full_name,$email,$type);
        return $sql->execute();
    }

}
