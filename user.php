<?php include 'header.php';  ?>




<div class="container">
    <div class="row">
        <h1 style="text-align: center;color: orangered">XIN CHÀO <?php 
            if(isset($_SESSION['client']))
            {
                echo $_SESSION['client'];
            }else
            {
                echo "";
            }
           
        ?></h1>
    </div>
</div>
<div class="container"> 
    <?php 
        if(isset($_SESSION['client'])):
            $user = new Users;
            $getUserByName = $user->getUserByName($_SESSION['client']);
            foreach($getUserByName as $value):
         ?>
    <form action="upload_file_edit_user.php?id=<?php echo $value['id_users'] ?>" method="post">
    <div class="row"> 
         <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
                <h4 style="color:red;">Thông tin cá nhân:</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label for="inputDescription">Tên đăng nhập:</label>
                  <span style="color: blue;border: none;"><?php echo $value['username_users'] ?></span>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Tên đầy đủ:</label>
                  <span id="chage_ten" style="color: blue;" name="fullname"><?php echo $value['fullname_users'] ?></span>
                </div>
                <div class="form-group">
                  <label for="inputEstimatedBudget">Mật khẩu:</label>
                  <input id="pass" style="color: blue;border: none;background-color: white;" type="password" disabled value="<?php echo $value['password_users'] ?>" name="password">
                </div>
                <div class="form-group">
                  <label for="inputDescription"> Email:</label>
                  <span id="chage_email" style="color: blue;" name="email"><?php echo $value['email_users'] ?></span>
                </div>
                <div class="form-group">
                    <label for="">Loại:</label>
                    <span id="chage_type" style="color: blue;">Khách hàng</span>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Câu hỏi đăng nhập:</label>
                  <span id="chage_quest" style="color: blue;" name="quest"><?php echo $value['question_users'] ?></span>
                </div>
                <div class="form-group">
                  <label for="inputEstimatedBudget">Câu trả lời:</label>
                  <input id="anser" style="color: blue;border: none;background-color: white;" type="password" disabled value="<?php echo $value['answer_users'] ?>" name="ans">
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
    </div>
    <div class="row">
    <a href="#" style="padding: 1% 2%; border-radius: 5px;" class="btn1 btn-primary">Sửa thông tin</a>
    <input id="btn" disabled type="submit" name="submit" style="padding: 0.85% 2%; border-radius: 5px;" class="btn btn-success" value="Cập nhật">
    <script>
        let wns_email = document.getElementById("chage_email");
        let wns_quest = document.getElementById("chage_quest");
        let wns = document.getElementById("chage_ten");
        let lmn = document.createElement("input");
        let lmn1 = document.createElement("input");
        let lmn3 = document.createElement("input");
        let pass = document.getElementById("pass");
        let anser = document.getElementById("anser");
        let index;
        let btn = document.getElementById("btn");
        let btn1 = document.querySelector(".btn1");
        btn1.onclick = () =>
        {
            // Copy the children
            while (wns.firstChild) {
                lmn.appendChild(wns.firstChild); // *Moves* the child
            }

            // Copy the attributes
            for (index = wns.attributes.length - 1; index >= 0; --index) {
                lmn.attributes.setNamedItem(wns.attributes[index].cloneNode());
            }

            // Replace it
            wns.parentNode.replaceChild(lmn, wns);
            //Email
            // Copy the children
            while (wns_email.firstChild) {
                lmn1.appendChild(wns_email.firstChild); // *Moves* the child
            }

            // Copy the attributes
            for (index = wns_email.attributes.length - 1; index >= 0; --index) {
                lmn1.attributes.setNamedItem(wns_email.attributes[index].cloneNode());
            }

            // Replace it
            wns_email.parentNode.replaceChild(lmn1, wns_email);
            //Quest
            // Copy the children
            while (wns_quest.firstChild) {
                lmn3.appendChild(wns_quest.firstChild); // *Moves* the child
            }

            // Copy the attributes
            for (index = wns_quest.attributes.length - 1; index >= 0; --index) {
                lmn3.attributes.setNamedItem(wns_quest.attributes[index].cloneNode());
            }

            // Replace it
            wns_quest.parentNode.replaceChild(lmn3, wns_quest);
            //pass and anser and submit
            pass.disabled = false;
            anser.disabled = false;
            btn.disabled = false;
            pass.style.removeProperty("border");
            anser.style.removeProperty("border");
        }
    </script>
    </div>
    </form>
    <?php endforeach; endif; ?>
</div>






















<?php include 'footer.html' ?>