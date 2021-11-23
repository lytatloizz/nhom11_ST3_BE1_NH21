<?php
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    require "models/manufacture.php";
    require "models/protype.php";
    $protypes = new Protype;
    $products = new Product;
    $manufacture = new Manufacture;

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $products->deleteProducts($id);
    }else
    {
        echo "khong xoa duoc";
    }
    header('location: products.php')
?>