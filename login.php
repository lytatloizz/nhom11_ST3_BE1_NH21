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

    foreach($show as $value)
    {
      if($acc == $value['username_users'] && $pass == $value['password_users'] && $value['loai'] == "admin" )
        {
          header("location: Admin/index.php");
          break;
        }
        else
        {
          echo "Sai ten dang nhap hoac mat khau";
          break;
        }
      
    }

    
  


?>