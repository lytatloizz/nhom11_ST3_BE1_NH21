<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th >
                          name
                      </th>
                      <th>
                          pass
                      </th>
                      <th>
                          full name
                      </th>
                      <th>
                          email	
                      </th>
                      <th class="text-center">
                          type
                      </th>
                      <th style="text-align: center;">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php 
                $getAllUser = $user->getAllUser();
                foreach($getAllUser as $value): 
              ?>
                  <tr>    
                      <td> <?php echo $value['id_users'] ?> </td>
                      <td > <?php echo $value['username_users'] ?> </td>
                      <td> <input type="password" value="<?php echo $value['password_users']?>" readonly></td>
                      <td class="project_progress"> <?php echo $value['fullname_users']  ?> </td>
                      <td class="project_progress"> <?php echo $value['email_users'] ?> </td>
                      <td class="project-state"> <?php echo $value['loai'] ?> </td>
                      <td class="project-actions text-right"> 
                         
                          <a class="btn btn-danger btn-sm" href="users-delete.php?id=<?php echo $value['id_users'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.html" ?>