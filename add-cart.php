<?php  include "header.php" ?>
<?php 
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['cart']);

    if(isset($_GET['delid'])&&($_GET['delid']>=0))
    {
        array_splice($_SESSION['cart'],$_GET['delid'],1);
    }


    if(isset($_SESSION['cart']) && isset($_POST['submit']))
    {
        $id = $_POST['idsp'];
        $name = $_POST['tensp'];
        $img = $_POST['hinhsp'];
        $price = $_POST['giasp'];
        $soluong = $_POST['soluong'];
       

        $flag = 0;

        for ($i=0; $i <sizeof($_SESSION['cart']) ; $i++) { 
            if($_SESSION['cart'][$i][0] == $id)
            {
                $flag = 1;
                $soluong_m = $soluong;
                $_SESSION['cart'][$i][4] = $soluong_m;
                break;
            }
        }
        if($flag == 0)
        {
            $sp = [$id,$name,$img,$price,$soluong];
            $_SESSION['cart'][] = $sp;
        }
    }
    function show_cart()
    {
        if(isset($_SESSION['cart']) && (is_array($_SESSION['cart'])))
        {
            $sum = 0;
            for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                $tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                $sum += $tt;
                echo '<tr style="text-align: center;">
                        <td>'.($i+1).'</td>
                        <td>'.$_SESSION['cart'][$i][0].'</td>
                        <td><a href="detail.php?id='.$_SESSION['cart'][$i][0].'">'.$_SESSION['cart'][$i][1].'</td>
                        <td><img src="./img/'.$_SESSION['cart'][$i][2].'" alt="" style="width:100px"></td>
                        <td>'.$_SESSION['cart'][$i][4].'</td>
                        <td>'.$_SESSION['cart'][$i][3].'</td>
                        <td>'.$tt.'</td>
                        <td><a style="color:red" href="add-cart.php?delid='.$i.'">Xóa</a></td>
                    </tr>';
            }
            echo 
                '<tr>
                    <th style="text-align: center" colspan="7">Tổng đơn hàng</th>
                    <th style="text-align: center;">'.number_format($sum).' VND</th>
                </tr>';
          $_SESSION['sum'] = $sum;
        }
    }
    function show_products()
    {
        if(isset($_SESSION['cart']) && (is_array($_SESSION['cart'])))
        {
            $sum1 = 0;
            for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                $tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                $sum1 += $tt;
                echo '<li>'.$_SESSION['cart'][$i][1].'</li>';
            }
        }else
        {
           $sum1 = 0; 
        }
        echo 
        '<h4 style="text-align: center; color:blue">Tổng tiền đã thanh toán.</h4>
        <h5 style="text-align: center;">'.number_format($sum1).' VND</h5>
        ';
    }
?>

<table style="width:100%" border="1px">
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Tên</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành Tiền</th>
        <th>Thao Tác</th>
    </tr>
    <?php show_cart() ?>
</table>
<Br>
<div style="text-align: right;">
    <a class="btn" data-toggle="modal" data-target="#exampleModalCenter" style="border: 1px solid black; background-color: aqua;border-radius: 5px;padding: 0.5%;">Thanh toán</a>
    <a class="btn" data-toggle="modal" data-target="#exampleModalCenter1" style="border: 1px solid black; background-color: aqua;border-radius: 5px;padding: 0.5%;">Xem đơn hàng</a>
    <a style="border: 1px solid black;border-radius: 5px;padding: 0.6%; background-color: pink" href="add-cart.php?delcart=1">Xóa tất cả</a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="#" method="post">
            Tên: <input type="text" required name="name_kh">
            Email: <input type="email" required name="email_kh"><br><br>
            Số tài khoản: <input type="text" required name="stk_kh">
            <br><br>
            <div style="text-align: center;">
            <input type="submit" class="btn btn-primary" name="submit1" id="" value="Đặt mua" required>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn" data-toggle="modal" data-dismiss="modal" data-target="#exampleModalCenter1" >Xem đơn hàng</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php
            if(isset($_POST['submit1']))
            {
                echo 'Khách hàng tên: '.$_POST['name_kh'].'<br>';
                echo 'Email khách hàng: '.$_POST['email_kh'].'<br>';
                echo 'Số tài khoản: '.$_POST['stk_kh'].'<br>';             
                echo '<h3 style="text-align: center; color: orangered;">Cám ơn bạn đã mua hàng ở shop</h3>
                <strong>Sản Phẩm bạn mua là:</strong>';
                show_products();
            }
           ?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" href="index.php">Về trang chủ</a>
      </div>
    </div>
  </div>
</div>
<?php include "footer.html" ?>