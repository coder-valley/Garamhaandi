<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add College
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/addCollege">Add College</a></li>
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
              <h3 class="box-title">Add College Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-college-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control required" placeholder="Enter Name" name="data[College][name]" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control required email" placeholder="Password" name="data[College][email]" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <textarea class="form-control required " placeholder="Address"  name="data[College][address]"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="text" class="form-control required " placeholder="New Password" id="college-new-pass" name="data[College][password]">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="text" class="form-control required" id="college-confirm-pass" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Country</label>
                  <select id="country" class="form-control required" name="data[College][country_id]">
                    <option value="">Select Country</option>
                    <?php foreach($country as $coun){?>
                    <option value="<?php echo $coun['Country']['id']?>"><?php echo $coun['Country']['country_name']?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">State</label>
                  <select id="state" class="form-control required" name="data[College][state_id]">
                    <option value="">Select State</option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">City</label>
                  <select id="city" class="form-control required" name="data[College][city_id]">
                    <option value="">Select City</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pincode</label>
                  <input type="text" class="form-control required number" placeholder="Pincode"  name="data[College][pincode]">
                </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Mobile No.</label>
                  <input type="text" class="form-control required number" placeholder="Mobile"  name="data[College][phone1]">
                </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Alternate No.</label>
                  <input type="text" class="form-control required number" placeholder="Alternate No."  name="data[College][phone2]">
                </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Website</label>
                  <input type="text" class="form-control required " placeholder="Website"  name="data[College][website]">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" name="image">

                  
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