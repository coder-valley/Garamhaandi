<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Facility
        <a href="<?php echo HTTP_ROOT?>Colleges/addFacility" class="btn btn-primary">Add Facility</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/manageFacility">Manage Facility</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Facility Listing</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="city-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($facilities as $facility){?>
                <tr>
                  <td>
                    <?php echo $facility['Facility']['name']?>
                  </td>
                  <td>
                   <a title="Edit" href="<?php echo HTTP_ROOT.'Colleges/addFacility/'.$facility['Facility']['id']?>"><i class="fa fa-edit"></i></a> 
                    <a title="Delete" href="<?php echo HTTP_ROOT.'Admins/delete/Facility/'.base64_encode($facility['Facility']['id'])?>"><i class="fa fa-trash"></i></a> 
                  </td>
                </tr>
                <?php }?>
                
                </tbody>
              </table>
              <?php if(!empty($facilities)){?>
                <?php echo  $this->element('admin/pagination');?>
              <?php }?>
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