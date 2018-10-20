<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage SubAdmins
        <a href="<?php echo HTTP_ROOT?>Admins/addSubadmin" class="btn btn-primary">Add Subadmin</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/manageSubadmin">Manage Subadmins</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sub Admin Listing</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="subadmin-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($subadmins as $subadmin){?>
                <tr>
                  <td>
                    <img src="<?php echo HTTP_ROOT.'img/adminImages/small/'.$subadmin['Admin']['image']?>" width="20%">
                  </td>
                  <td>
                    <?php echo $subadmin['Admin']['username']?>
                  </td>
                  <td>
                    <?php echo $subadmin['Admin']['email']?>
                  </td>
                  <td>
                    <a title="Edit" href="<?php echo HTTP_ROOT.'Admins/editsubadmin/'.$subadmin['Admin']['id']?>"><i class="fa fa-edit"></i></a> 
                    <a title="Delete" href="<?php echo HTTP_ROOT.'Admins/deletesubadmin/'.$subadmin['Admin']['id']?>"><i class="fa fa-trash"></i></a> 
                  </td>
                </tr>
                <?php }?>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>