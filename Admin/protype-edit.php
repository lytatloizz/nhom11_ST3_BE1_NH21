<?php include "header.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="upload_file_edit_type.php" method="post" enctype="multipart/form-data">
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
                <label for="inputName">Protype Id</label>
                <select id="inputStatus" class="form-control custom-select" name="id">
                  <option value="<?php echo $_GET['id'] ?>"><?php echo $_GET['id'] ?></option>
                </select>
              </div>
              <?php $id = $_GET['id']; $getProtypeById = $protypes->getProtypeById($id); foreach($getProtypeById as $value): ?>
              <div class="form-group">
                <label for="inputDescription">Protype Name</label>
                <input type="text" id="inputName" class="form-control" value="<?php echo $value['type_name'] ?>" name="name">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <?php endforeach ?>
      <div class="row">
        <div class="col-12">
          <input type="submit" name="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.html" ?>