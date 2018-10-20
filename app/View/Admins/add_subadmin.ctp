<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Sub Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/editAdmin">Add Subadmin</a></li>
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
              <h3 class="box-title">Add SubAdmin Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="addsubadmin-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" value="1" name="data[Admin][type]">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control required" placeholder="Enter Username" name="data[Admin][username]" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control required email" placeholder="Password" name="data[Admin][email]" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="text" class="form-control required " placeholder="New Password" id="add-new-pass" name="data[Admin][password]">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="text" class="form-control required" id="add-confirm-pass" placeholder="Confirm Password">
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
  </div>s