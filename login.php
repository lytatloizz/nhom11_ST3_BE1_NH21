<?php   
    // lay du lieu tu trong form gui len
    $us = $_POST['username'];   // ten dang nhap ne
    $pa = $_POST['password']; // mat khau ne
    //ket noi den co so du lieu
    $db = mysqli_connect("localhost","root","","nhom11_tatloi_tanminh");

    //truy van co so du lieu --- tim username va password
    $sql = "SELECT * FROM USERS WHERE username = '$us'  AND password = '$pa'";

    //
    $sr = mysqli_query($db, $sql);

    if (mysqli_num_row($sr) > 0) {
        echo "<h1>Dang nhap thanh cong </h1>";
    }else
    {
        echo "<h2>Dang nhap that bai hahaha </h2>";
    }


?>