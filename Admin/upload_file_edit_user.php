<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/users.php";
$protypes = new Protype;
$products = new Product;
$manufacture = new Manufacture;
$user = new Users;
    if(isset($_POST['submit']))
    {
        $id = trim($_POST['id']);
        $name = trim($_POST['name']);
        $pass = trim($_POST['password']);
        $full_name = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        $type =  trim($_POST['type']);
        $user->editUser($id,$name,$pass,$full_name,$email,$type);
    }else
    {
        echo 0;
    }
header('location: users.php');
                                  
?>