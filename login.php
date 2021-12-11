<?php

  require "config/config.php";
  require "models/db.php";
  require "models/product.php";
  require "models/manufacture.php";
  require "models/users.php";
  $user = new Users;
  
    $show = $user->getAllUser();
    
    $pass = Trim($_POST['password']);
    $acc = Trim($_POST['username']);
    $login = 0;

    foreach($show as $value)
    {
      if($acc == $value['username_users'] && md5($pass) == $value['password_users'] && $value['role_users'] == "admin" )
        {
          header("location: Admin/index.php");
          $login = 1;
        }
      if($acc == $value['username_users'] && md5($pass) == $value['password_users'] && $value['role_users'] != "admin" )
      {
        echo "Đăng nhập thành công";
        $login = 1;
        break;
      }
      
    }
    if ($login = 0) {
      echo "Sai tên đăng nhập hoặc mật khẩu";
    }
    
    
  


?>