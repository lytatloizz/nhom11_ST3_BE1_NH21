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
    <form action="upload_file_edit.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
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
                <label for="inputName">Products Id</label>
                <select id="inputStatus" class="form-control custom-select" name="id">
                  <option value="<?php echo $_GET['id'] ?>"><?php echo $_GET['id'] ?></option>
                </select>
              </div>
              <?php $id = $_GET['id']; $getProductById = $products->getProductById($id); foreach($getProductById as $value): ?>
              <div class="form-group">
                <label for="inputDescription">Products Name</label>
                <input type="text" id="inputName" class="form-control" value="<?php echo $value['name'] ?>" name="name">
              </div>
              <div class="form-group">
                <label for="inputStatus">Products Image</label>
                <div class="custom-file-upload">
                  <input type="text" id="img" class="form-control" value="<?php echo $value['image'] ?>" name="Image">
                </div>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Products Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="description"><?php echo $value['description'] ?></textarea>
              </div>
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
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
                <label for="inputName">Products manufactures</label>
                <select id="inputmanufactures" class="form-control custom-select" name="manu_id">
                <?php $getAllmanu = $manufacture->getAllManu(); foreach($getAllmanu as $value1) 
                    {
                      if($value['manu_name'] == $value1['manu_name'])
                      {
                        echo '<option value="'.$value['manu_id'].'">'.$value['manu_name'].'</option>';
                      }
                    }
                ?>
                <?php $getAllmanu = $manufacture->getAllManu(); foreach($getAllmanu as $value1) 
                    {
                      if($value['manu_name'] != $value1['manu_name'])
                      {
                        echo '<option value="'.$value1['manu_id'].'">'.$value1['manu_name'].'</option>';
                      }
                    }
                ?>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Products Price</label>
                <input type="text" id="inputPrice" class="form-control" value="<?php echo $value['price']?>" name="price">
              </div>
              <div class="form-group">
                <label for="inputStatus">Products protypes</label>
                <select id="inputmanufactures" class="form-control custom-select" name="type_id">
                <?php $getAlltype = $protypes->getAllprotypes(); foreach($getAlltype as $value1) 
                    {
                      if($value['type_name'] == $value1['type_name'])
                      {
                        echo '<option value="'.$value['type_id'].'">'.$value['type_name'].'</option>';
                      }
                    }
                ?>
                <?php $getAllmanu = $manufacture->getAllManu(); foreach($getAlltype as $value1) 
                    {
                      if($value['type_name'] != $value1['type_name'])
                      {
                        echo '<option value="'.$value1['type_id'].'">'.$value1['type_name'].'</option>';
                      }
                    }
                ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Products feature</label>
                <select id="inputmanufactures" class="form-control custom-select" name="feature">
                  <option value="1">Nổi Bật</option>
                  <option value="0">Không Nổi Bật</option>
              </select>
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