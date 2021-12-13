<?php
  session_start();
  require "config/config.php";
  require "models/db.php";
  require "models/product.php";
  require "models/manufacture.php";
  require "models/users.php";
  $user = new Users;
  
    $show = $user->getAllUser();
    
    $pass = Trim($_POST['password']);
    $acc = Trim($_POST['username']);

    foreach($show as $value)
    {
      if($acc == $value['username_users'] && md5($pass) == $value['password_users'] && $value['loai'] == "admin" )
        {
          $_SESSION['username'] = $acc;
          header("location: Admin/index.php");
          break;
        }
    }
    echo "Sai ten dang nhap hoac mat khau";

    
  


?>