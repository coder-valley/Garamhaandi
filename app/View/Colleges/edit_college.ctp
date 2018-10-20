<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit College
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Colleges/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/editCollege">Edit College</a></li>
      </ol>
    </section>

      <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Edit College</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Edit Near By</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">College About</a></li>
    </ul>
    <div class="tab-content">
      <!-- Main content -->
      <div role="tabpanel" class="tab-pane active" id="home">
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit College Details</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" id="edit-college-form" method='post' enctype="multipart/form-data" action="javascript:void(0);">
                  <input type="hidden" name="data[College][id]" value="<?php echo $college['College']['id']?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control required" placeholder="Enter Name" name="data[College][name]" value="<?php echo $college['College']['name']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" class="form-control required" placeholder="Password" value="<?php echo $college['College']['email']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control required " placeholder="Address"  name="data[College][address]"><?php echo $college['College']['address']?></textarea>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Country</label>
                      <select id="country" class="form-control required" name="data[College][country_id]">
                        <option value="">Select Country</option>
                        <?php foreach($country as $coun){?>
                        <option value="<?php echo $coun['Country']['id']?>" <?php echo $college['College']['country_id'] == $coun['Country']['id'] ? 'selected' : '';?>><?php echo $coun['Country']['country_name']?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label  for="exampleInputPassword1">State</label>
                      <select id="state" class="form-control required" name="data[College][state_id]">
                        <option value="">Select State</option>
                        <option value="<?php echo $college['State']['id']?>" selected><?php echo $college['State']['statename']?></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">City</label>
                      <select id="city" class="form-control required" name="data[College][city_id]">
                        <option value="">Select City</option>
                        <option value="<?php echo $college['City']['id']?>" selected><?php echo $college['City']['city_name']?></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Pincode</label>
                      <input type="text" class="form-control required number" placeholder="Pincode"  name="data[College][pincode]" value="<?php echo $college['College']['pincode']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Mobile No.</label>
                      <input type="text" class="form-control required number" placeholder="Mobile"  name="data[College][phone1]" value="<?php echo $college['College']['phone1']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Alternate No.</label>
                      <input type="text" class="form-control required number" placeholder="Alternate No."  name="data[College][phone2]" value="<?php echo $college['College']['phone2']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Website</label>
                      <input type="text" class="form-control required " placeholder="Website"  name="data[College][website]" value="<?php echo $college['College']['website']?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <input type="file" name="image">

                      
                    </div>
                    <div class="form-group">
                      <img src="<?php echo HTTP_ROOT.'img/collegeImages/small/'.$college['College']['image']?>" class="img-responsive">

                      
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
      </div> 
      <div role="tabpanel" class="tab-pane" id="profile">
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
                <form role="form" id="near-college-form" method='post' enctype="multipart/form-data">
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
        </section>
      <!-- /.row -->
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">
        <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add About College Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="about-college-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
              <input type="hidden" name="data[CollegeMeta][id]" value="<?php echo @$collegeMeta['CollegeMeta']['id']?>">
              <input type="hidden" name="data[CollegeMeta][college_id]" value="<?php echo @$collegeId?>">
              <div class="form-group">
                  <label for="exampleInputPassword1">College Short Name</label>
                  <input type="text" class="form-control" placeholder="College Short Name" name="data[CollegeMeta][short_name]" value="<?php echo @$collegeMeta['CollegeMeta']['short_name']?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">College Description</label>
                  <textarea class="form-control" placeholder="College Description" name="data[CollegeMeta][description]"><?php echo @$collegeMeta['CollegeMeta']['description']?></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Establishment</label>
                  <input type="text" class="form-control" placeholder="Establishment" name="data[CollegeMeta][establishment]" value="<?php echo @$collegeMeta['CollegeMeta']['establishment']?>" id="datepicker">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contact Person Name</label>
                  <input type="text" class="form-control" placeholder="Contact Person Name" name="data[CollegeMeta][contact_person]" value="<?php echo @$collegeMeta['CollegeMeta']['contact_person']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Toll Free Number</label>
                  <input type="text" class="form-control number" placeholder="Toll Free Number" name="data[CollegeMeta][toll_free]" value="<?php echo @$collegeMeta['CollegeMeta']['toll_free']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fax Number</label>
                  <input type="text" class="form-control" placeholder="Fax Number" name="data[CollegeMeta][fax]" value="<?php echo @$collegeMeta['CollegeMeta']['fax']?>">
                </div>
                <div class="form-group">
                  
                  <label for="exampleInputEmail1">Land Area</label>
                  <input type="text" class="form-control number" placeholder="Land Area" name="data[CollegeMeta][land_area]" value="<?php echo @$collegeMeta['CollegeMeta']['land_area']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Trust</label>
                  <input type="text" class="form-control" placeholder="Trust" name="data[CollegeMeta][trust_name]" value="<?php echo @$collegeMeta['CollegeMeta']['trust_name']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Afilited By</label>
                  <input class="form-control  " placeholder="Afilited By"  name="data[CollegeMeta][affiliated_by]" value="<?php echo @$collegeMeta['CollegeMeta']['affiliated_by']?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Type (private / Government)</label>
                  <select class="form-control" name="data[CollegeMeta][college_type]">
                     <option value="">Select College Type</option>
                     <option value="0" <?php echo @$collegeMeta['CollegeMeta']['college_type'] == '0' ? 'selected' : '' ;?>>Government </option>
                     <option value="1" <?php echo @$collegeMeta['CollegeMeta']['college_type'] == '1' ? 'selected' : '' ;?>>Private</option>
                  </select> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">College Map Latitude</label>
                  <input type="text" class="form-control number"  placeholder="CollegeMeta Map Lattitude" value="<?php echo @$collegeMeta['CollegeMeta']['latitude']?>" name="data[CollegeMeta][latitude]">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">College Map Longitude</label>
                  <input type="text" class="form-control number" placeholder="College Map Langitude"  name="data[CollegeMeta][longitude]" value="<?php echo @$collegeMeta['CollegeMeta']['longitude']?>">
                </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">About College</label>
                  <textarea id="editor1" class="form-control" name="data[CollegeMeta][about]"><?php echo @$collegeMeta['CollegeMeta']['about']?></textarea>
               
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
      </div>
      <!-- /.content -->
    </div>
  </div>