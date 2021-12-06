<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$protypes = new Protype;
$products = new Product;
$manufacture = new Manufacture;
$getAlltype = $protypes->getAllprotypes();
$getAllmanu = $manufacture->getAllManu();
    if(isset($_POST['submit']))
    {
        $name = trim($_POST['name']);
        $price = (int) $_POST['price'];
        $image =  $_FILES['Image']['name'];
        $description = trim($_POST['description']);
        $type_id = (int) $_POST['type_id'];
        $manu_id = (int) $_POST['manu_id'];
        $feature = (int) $_POST['feature'];
        $products->insertProducts($name,$price,$manu_id,$type_id,$description,$image,$feature);
        //upload_file
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["Image"]["name"]);
        move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file);     
    }else
    {
        echo 0;
    }
header('location: products.php');
                                  
?>