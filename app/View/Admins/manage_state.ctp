<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage State
        <a href="<?php echo HTTP_ROOT?>Admins/addState" class="btn btn-primary">Add State</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/manageState">Manage State</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">State Listing</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="college-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Country</th>
                  <th>State Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($countries as $country){?>
                <tr>
                  <td>
                    <?php echo $country['Country']['country_name']?>
                  </td>
                  <td>
                    <?php echo $country['State']['statename']?>
                  </td>
                  <td>
                    <!-- <a title="Edit" href="<?php echo HTTP_ROOT.'Colleges/editCollege/'.$college['College']['id']?>"><i class="fa fa-edit"></i></a>  -->
                    <a title="Delete" href="<?php echo HTTP_ROOT.'Admins/delete/State/'.base64_encode($country['State']['id'])?>"><i class="fa fa-trash"></i></a> 
                  </td>
                </tr>
                <?php }?>
                
                </tbody>
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