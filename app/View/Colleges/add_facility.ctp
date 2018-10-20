<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Facility
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/addFacility">Add Facility</a></li>
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
              <h3 class="box-title">Add Facility</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-Facility-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Facility</label>
                  <input type="hidden" name="data[Facility][id]"  value="<?php echo @$facility['Facility']['id']?>">
                  <input type="text" class="form-control required" required placeholder="Enter Name" name="data[Facility][name]" value="<?php echo @$facility['Facility']['name']?>">
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