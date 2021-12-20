<?php 
session_start();
require "config/config.php";
require "models/db.php";
require "models/bill.php"; 
?>
<?php 
$bill = new Bill();

if(!isset($_SESSION['cart']) || !isset($_SESSION['client']) || !isset($_SESSION['sum']))
{
    echo '<p style="color: blue; text-align: center;">hãy đăng nhập và kiểm tra giỏ hàng đã có sản phẩm chưa để thực hiện chức năng này.';
}else
{
    $name = $_SESSION['client'];
    $price = $_SESSION['sum'];
    $j = 1;
    $content = "";
    for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
    {
        
        for($k = 0; $k <= sizeof($_SESSION['cart']); $k++)
        {
            $content .= $_SESSION['cart'][$i][1].',';
            break;         
        }
    }
    
  // insertBill

    $bill->insertBill($name,$content,$price);

    
    // delete session cart
    unset($_SESSION['cart']);
    // chuyen sang bill.php
    header("location: bill.php");
}




?>
