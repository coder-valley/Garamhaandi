<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Facility
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/manageCollege">College Listing</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/collegeFacility/<?php echo @$collegeId?>">Add Facility</a></li>
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
            <form role="form" id="add-state-form" method='post' enctype="multipart/form-data">
               <input type="hidden" name="data[CollegeFacility][id]" value="<?php echo @$CollegeFacility['CollegeFacility']['id']?>">
                <input type="hidden" name="data[CollegeFacility][college_id]" value="<?php echo @$collegeId?>">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Facility Type</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                    <input type="text" class="form-control required" placeholder="Enter Name" name="data[CollegeFacility][name]" value="<?php echo @$CollegeFacility['CollegeFacility']['name']?>">
                  </td>
                  <td>
                    <select class="form-control required" name="data[CollegeFacility][facility_id]">
                    <option value="">Select Facility</option>
                    <?php foreach($facilities as $facility){?>
                    <option value="<?php echo $facility['Facility']['id']?>" <?php echo $facility['Facility']['id'] == @$CollegeFacility['CollegeFacility']['facility_id'] ? 'selected' : '';?>><?php echo $facility['Facility']['name']?></option>
                    <?php }?>
                  </select>
                  </td>
                   <td>
                   <input type="text" class="form-control required" placeholder="Enter Description" name="data[CollegeFacility][description]" value="<?php echo @$CollegeFacility['CollegeFacility']['description']?>">
                  </td>
                  
                </tr>
                
                </tfoot>
              </table>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>


            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">College Facilities</h3>
              </div>
              <table id="facility-form" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Facility Type</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($CollegeFacilities as $facility){?>
                  <tr>
                    <td>
                      <?php echo $facility['CollegeFacility']['name']?>
                    </td>
                    <td>
                      <?php echo $facility['Facility']['name']?>
                    </td>
                     <td>
                     <?php echo $facility['CollegeFacility']['description']?>
                    </td>
                    <td>
                      <a class="fafa-icons" title="Edit" href="<?php echo HTTP_ROOT.'Colleges/collegeFacility/'.$collegeId.'/'.$facility['CollegeFacility']['id']?>"><i class="fa fa-edit"></i></a> 
                      <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/CollegeFacility/'.base64_encode($facility['CollegeFacility']['id'])?>"><i class="fa fa-trash"></i></a> 
                    </td>
                  </tr>
                  <?php }?>
                  </tfoot>
                </table>
            </tbody>    
             <?php if(!empty($CollegeFacilities)){?>
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