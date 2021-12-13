<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="upload_file_users.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
          <div class="card-body">
              <div class="form-group">
                <label for="inputName">User Name</label>
                <input type="text" id="inputName" class="form-control" name="username">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">User password</label>
                <input type="password" id="password" class="form-control" name="password">
              </div>
              <div class="form-group">
                <label for="inputName">User full name</label>
                <input type="text" id="inputName" class="form-control" name="fullname">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">User Email</label>
                <input type="text" id="email" class="form-control" name="email">
              </div>
              <div class="form-group">
              <label for="myQuestion">Câu hỏi bảo mật</label>
                <input type="text" id="email_input" class="form-control"
                placeholder="Nhập bất cứ câu hỏi nào bạn nghĩ ra" name="quest"
                pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s\W|_]+$"
                required>
              </div>
              <div class="form-group">
              <label for="myAnswer">Câu trả lời bảo mật</label>
                <input type="text" id="email_input" class="form-control"
                placeholder="Nhập câu trả lời cho câu hỏi đó" name="ans">
              </div>
          </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" name="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
    </form>                              
    </section>
  </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
<br>
  <?php include "footer.html" ?>