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
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
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
                <label for="inputName">Products Name</label>
                <input type="text" id="inputName" class="form-control" name="name">
              </div>
              <div class="form-group" >
                <label for="inputName">Products Image</label>
                <div class="custom-file-upload">
                  <input type="file" id="file" class="form-control" name="Image"> 
                </div>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Products Price</label>
                <input type="text" id="Price" class="form-control" name="price">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Products type</label>
                <select id="inputType" class="form-control custom-select" name="type_id">
                  <?php  foreach($getAlltype as $values): ?>
                  <option value="<?php echo $values['type_id']?>"><?php echo $values['type_name'] ?></option>
                  <?php endforeach; ?>
                </select>
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
                  <label for="inputDescription">Products Description</label>
                  <textarea id="inputDescription" class="form-control" rows="4" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Products Manufacture</label>
                  <select id="inputManufacture" class="form-control custom-select" name="manu_id">
                    <?php  foreach($getAllmanu as $values): ?>
                    <option value="<?php echo $values['manu_id'] ?>"><?php echo $values['manu_name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputEstimatedBudget">Products feature</label>
                  <select id="inputfeature" class="form-control custom-select" name="feature">
                    <option value="1">Nổi bật</option>
                    <option value="0">Không nổi bật</option>
                  </select>
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