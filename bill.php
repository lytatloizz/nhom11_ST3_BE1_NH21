<?php include "header.php"; require "models/bill.php"; $bill = new Bill(); ?>
<table style="width: 100%;" border = 1px>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th >Description</th>
        <th>Price</th>
        <th>Day</th>
        <th>Action</th>
    </tr>
<?php  
    if(isset($_SESSION['client'])):
        $getbill = $bill->getBill($_SESSION['client']);
        foreach($getbill as $value):
?> 
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['name'] ?></td>
        <td ><a data-toggle="modal" data-target="#exampleModalCenter<?php echo $value['id']?>"> Xem thong tin hoa don</a></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['day_trading'] ?></td>
        <td><a style="color: red;" href="bill-delete.php?id=<?php echo $value['id'] ?>">Delete</a></td>
    </tr>
<?php endforeach; endif ?>    
</table>

<?php if(isset($_SESSION['client'])): $getbill = $bill->getBill($_SESSION['client']); foreach($getbill as $value): ?>
<div class="modal fade" id="exampleModalCenter<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <h3 style="text-align: center; color: orangered;">Cám ơn <?php echo $value['name'] ?> đã mua hàng ở shop</h3>
                <strong>Sản Phẩm bạn mua là:</strong>
            <?php
                $content =  explode(",",$value['content']);
                for($i = 0; $i < sizeof($content); $i++):
            ?>
                <p><?php echo $content[$i]; ?></p>
            <?php endfor ?>
                <h4 style="text-align: center; color:blue">Tổng tiền đã thanh toán.</h4>
                <h5 style="text-align: center;"><?php echo number_format($value['price']) ?>VND</h5>

      </div>
      <div class="modal-footer">
        <button data-toggle="modal" data-target="#sendmail<?php echo $value['id'] ?>" type="button" class="btn btn-warning" data-dismiss="modal">Gửi hóa đơn này về email.</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" href="index.php">Về trang chủ</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sendmail<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="send-mail.php?id=<?php echo $value['id'] ?>" method="post">
            Email: <input type="email" required name="email_kh"><br><br>
            <br><br>
            <div style="text-align: center;">
              <input type="submit" class="btn btn-primary" name="send" id="" value="Gửi" required>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; endif ?>

<?php include "footer.html"; ?>