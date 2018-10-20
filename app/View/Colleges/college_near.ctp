<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Near by locations
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/collegeNear">Add Near by locations</a></li>
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
              <h3 class="box-title">Add Near by locations</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-college-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
              <input type="hidden" name="data[CollegeNear][id]" value="<?php echo @$CollegeNear['CollegeNear']['id']?>">
              <input type="hidden" name="data[CollegeNear][college_id]" value="<?php echo @$collegeId?>">
              <div class="form-group">
                  <label for="exampleInputPassword1">Nearest Hospital</label>
                  <input type="text" class="form-control" placeholder="Nearest Hospital" name="data[CollegeNear][near_hospital]" value="<?php echo @$CollegeNear['CollegeNear']['near_hospital']?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Nearest Bank ATM</label>
                  <textarea class="form-control" placeholder="Nearest Bank ATM" name="data[CollegeNear][near_atm]"><?php echo @$CollegeNear['CollegeNear']['near_atm']?></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Nearest Railway Station</label>
                  <input type="text" class="form-control" placeholder="Nearest Railway Station" name="data[CollegeNear][near_railway]" value="<?php echo @$CollegeNear['CollegeNear']['near_railway']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nearest Police Station</label>
                  <input type="text" class="form-control" placeholder="Nearest Police Station" name="data[CollegeNear][near_police]" value="<?php echo @$CollegeNear['CollegeNear']['near_police']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nearest Shopping</label>
                  <input type="text" class="form-control" placeholder="Nearest Shopping" name="data[CollegeNear][near_shopping]" value="<?php echo @$CollegeNear['CollegeNear']['near_shopping']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nearest Restaurant</label>
                  <input type="text" class="form-control" placeholder="Nearest Restaurant" name="data[CollegeNear][near_restaurant]" value="<?php echo @$CollegeNear['CollegeNear']['near_restaurant']?>">
                </div>
                <div class="form-group">
                  
                  <label for="exampleInputEmail1">Nearest Metro Station</label>
                  <input type="text" class="form-control" placeholder="Nearest Metro Station" name="data[CollegeNear][near_metro]" value="<?php echo @$CollegeNear['CollegeNear']['near_metro']?>">
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