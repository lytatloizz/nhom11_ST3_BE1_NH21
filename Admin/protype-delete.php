<?php
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    require "models/manufacture.php";
    require "models/protype.php";
    $protypes = new Protype;
    $products = new Product;
    $manufacture = new Manufacture;

    if(isset($_GET['type_id']))
    {
        $id = $_GET['type_id'];
        $protypes->deleteProtype($id);
    }else
    {
        echo "khong xoa duoc";
    }
    header('location: protype.php')
?>