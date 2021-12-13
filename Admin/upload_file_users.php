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
$getAlltype = $protypes->getAllprotypes();
$getAllmanu = $manufacture->getAllManu();
    if(isset($_POST['submit']))
    {
        $name = trim($_POST['name']);
        $pass = trim($_POST['password']);
        $full_name = trim($_POST['full_name']);
        $email = trim($_POST['email']);
        $type = trim($_POST['type']);
        $user->addUser($name,$pass,$full_name,$email,$type);
        //upload_file  
    }else
    {
        echo 0;
    }
header('location: users.php');
                                  
?>