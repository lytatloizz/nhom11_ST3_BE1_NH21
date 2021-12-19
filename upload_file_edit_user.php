<?php 
session_start();
require "config/config.php";
require "models/db.php";
require "models/users.php";
$user = new Users;

$id = trim($_GET['id']);
$acc = $_SESSION['client'];
$pass = Trim($_POST['password']);
$fullname = Trim($_POST['fullname']);
$email = Trim($_POST['email']);
$quest = Trim($_POST['quest']);
$role = "normal";
$ans = Trim($_POST['ans']);

if(isset($_POST['submit']))
{
  $user->editUser($acc,$pass,$fullname,$email,$role,$quest,$ans,$id);
}else
{
  echo 0;
}
header("location: user.php");

          
                                  
?>