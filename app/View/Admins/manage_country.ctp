<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Country
        <a href="<?php echo HTTP_ROOT?>Admins/addCountry" class="btn btn-primary">Add Country</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/manageCountry">Manage Country</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Country Listing</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="college-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Country Name</th>
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
                    <!-- <a title="Edit" href="<?php echo HTTP_ROOT.'Colleges/editCollege/'.$college['College']['id']?>"><i class="fa fa-edit"></i></a>  -->
                    <a title="Delete" href="<?php echo HTTP_ROOT.'Admins/delete/Country/'.base64_encode($country['Country']['id'])?>"><i class="fa fa-trash"></i></a> 
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