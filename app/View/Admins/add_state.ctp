<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add State
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/addState">Add State</a></li>
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
              <h3 class="box-title">Add State</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-state-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <select class="form-control required" name="data[State][country_id]">
                    <option value="">Select Country</option>
                    <?php foreach($country as $coun){?>
                    <option value="<?php echo $coun['Country']['id']?>"><?php echo $coun['Country']['country_name']?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">State</label>
                  <input type="text" class="form-control required" placeholder="Enter Name" name="data[State][statename]" >
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