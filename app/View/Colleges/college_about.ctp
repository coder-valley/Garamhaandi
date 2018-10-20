<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add About College
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/collegeAbout">Add About College</a></li>
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
              <h3 class="box-title">Add About College Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-college-form" method='post' enctype="multipart/form-data">
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
    <!-- /.content -->
  </div>s