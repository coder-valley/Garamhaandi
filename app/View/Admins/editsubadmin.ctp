<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/editsubadmin">Edit SubAdmin</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit SubAdmin Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="edit-subadmin-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="hidden" name="data[Admin][id]" value="<?php echo $admin['Admin']['id']?>">
                  <input type="text" class="form-control required" placeholder="Enter Username" name="data[Admin][username]" value="<?php echo $admin['Admin']['username']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control required email" placeholder="Password" name="data[Admin][email]" value="<?php echo $admin['Admin']['email']?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" name="image">

                  
                </div>
                <?php if(!empty($admin['Admin']['image'])){?>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <img src="<?php echo HTTP_ROOT.'img/adminImages/large/'.$admin['Admin']['image']?>" class="img-responsive">

                  
                </div>
                <?php }?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>