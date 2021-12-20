<?php 
require "config/config.php";
require "models/db.php";
require "models/bill.php"; 

$bill = new Bill();

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $bill->deleteBill($id);
}else
{
    echo "khong xoa duoc";
}
header('location: bill.php')
?>