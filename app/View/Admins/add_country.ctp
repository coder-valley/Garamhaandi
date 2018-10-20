<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Country
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/addCountry">Add Country</a></li>
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
              <h3 class="box-title">Add Country</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-country-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Country Name</label>
                  <input type="text" class="form-control required" placeholder="Enter Name" name="data[Country][country_name]" >
                </div>
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