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

    public function signup($acc,$pass,$fullname,$email,$role,$quest,$ans)
    {
        $sql = self::$connection->prepare("INSERT INTO users (`username_users`, `password_users`, `fullname_users`, `email_users`, `role_users`, `question_users`, `answer_users`) VALUES (?,?,?,?,?,?,?)");
        $pass = md5($pass);
        $ans = md5($ans);
        $sql->bind_param("sssssss", $acc,$pass,$fullname,$email,$role,$quest,$ans);
        return $sql->execute(); //run SQl
        
    }

    public function resetPassword($newpass, $acc)
    {
        $sql = self::$connection->prepare("UPDATE users SET password_users = $newpass WHERE username_users = $acc");
        $newpass = md5($newpass);
        $sql->bind_param("ss",$newpass, $acc );
        return $sql->execute(); //run SQl
    }
}
