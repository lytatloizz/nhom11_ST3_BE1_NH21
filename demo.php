<?php include "header.php" ?>


<p>test github</p>

<?php 
    $a = 1;
    $getproductsbyid = $product->getProductById($a);
    var_dump($getproductsbyid);
 
?>

<?php include "footer.html" ?>