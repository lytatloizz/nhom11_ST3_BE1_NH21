<?php
  require "config/config.php";
  require "models/db.php";
  require "models/product.php";
  require "models/manufacture.php";
  require "models/users.php";


  $user = new Users;

  $acc = Trim($_POST['username']);
  $pass = Trim($_POST['password']);
  $fullname = Trim($_POST['fullname']);
  $email = Trim($_POST['email']);
  $quest = Trim($_POST['quest']);
  $role = "normal";
  $ans = Trim($_POST['ans']);
  
  $show = $user->getAllUser();

  $message = "Có gì đó sai sai, hãy kiểm tra lại";

  foreach($show as $value)
    {
      if($acc == $value['username_users'])
        {
            echo "<script type='text/javascript'>alert('Tài khoản này trong hệ thống đã tồn tại, hãy thử tên khác');</script>";
            header("location: signup.html");
            break;
        }
        if($acc != $value['username_users'] )
        {
            $user->signup($acc,$pass,$fullname,$email,$role,$quest,$ans);
            echo "Đăng ký thành công";
            break;
        }
        else {
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
      
    }



  ?>

  