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
  $name = $_POST['name'];
  $protypes->addProtype($name);
}
else
{
  echo 0;
}
header("location: protype.php");
?>