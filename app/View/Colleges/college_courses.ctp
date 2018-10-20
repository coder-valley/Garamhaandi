<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Courses
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/manageCollege">College Listing</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/collegeCourses/<?php echo @$collegeId?>">Add Courses</a></li>
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
              <h3 class="box-title">Add Courses</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-state-form" method='post' enctype="multipart/form-data">
               <div class="box-body">
               <input type="hidden" name="data[CollegeCourse][id]" value="<?php echo @$CollegeCourse['CollegeCourse']['id']?>">
                <input type="hidden" name="data[CollegeCourse][college_id]" value="<?php echo @$collegeId?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Degree</label>
                  <Select class="form-control required" placeholder="Degree" name="data[CollegeCourse][degree_id]" >
                  <?php foreach($allDegree as $degree){?>
                    <option value="<?php echo $degree['Degree']['id']?>" <?php echo @$CollegeCourse['CollegeCourse']['degree_id'] == $degree['Degree']['id'] ? "selected" : '';?>><?php echo @$degree['Degree']['degree']?></option>
                  <?php }?>
                  </Select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control" placeholder="Description" name="data[CollegeCourse][description]" value="<?php echo @$CollegeCourse['CollegeCourse']['description']?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fees</label>
                  <input type="text" class="form-control required number" placeholder="Fees"  name="data[CollegeCourse][fees]" value="<?php echo @$CollegeCourse['CollegeCourse']['fees']?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Forms Adda Cost</label>
                  <input type="text" class="form-control required number" placeholder="Forms Adda Cost"  name="data[CollegeCourse][formsadda_cost]" value="<?php echo @$CollegeCourse['CollegeCourse']['formsadda_cost']?>">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>


            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">College Courses</h3>
              </div>
              <table id="facility-form" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Degree</th>
                    <th>Description</th>
                    <th>Fees</th>
                    <th>Form Adda Cost</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($CollegeCourses as $course){?>
                  <tr>
                    <td>
                      <?php echo $course['Degree']['degree']?>
                    </td>
                    <td>
                     <?php echo $course['CollegeCourse']['description']?>
                    </td>
                    <td>
                      <?php echo $course['CollegeCourse']['fees']?>
                    </td>
                    <td>
                      <?php echo $course['CollegeCourse']['formsadda_cost']?>
                    </td>
                     
                    <td>
                      <a class="fafa-icons" title="Edit" href="<?php echo HTTP_ROOT.'Colleges/collegeCourses/'.$collegeId.'/'.$course['CollegeCourse']['id']?>"><i class="fa fa-edit"></i></a> 
                      <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/CollegeCourse/'.base64_encode($course['CollegeCourse']['id'])?>"><i class="fa fa-trash"></i></a> 
                    </td>
                  </tr>
                  <?php }?>
                  </tfoot>
                </table>
            </tbody>    
             <?php if(!empty($collegeCourse)){?>
                <?php echo  $this->element('admin/pagination');?>
              <?php }?>
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