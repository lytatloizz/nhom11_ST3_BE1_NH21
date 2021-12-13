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

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $user->deleteUser($id);
    }else
    {
        echo "khong xoa duoc";
    }
    header('location: users.php')
?>