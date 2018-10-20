<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage College Form
        <a href="<?php echo HTTP_ROOT?>Forms/addCustomField/<?php echo @$collegeId?>" class="btn btn-primary">Add Custom Field</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/manageCollege">Manage College</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Forms/collegeForm/<?php echo @$collegeId?>">Manage College Form</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage College Form</h3>

            </div>
            <form method="post">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="city-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Include</th>
                  <th>Field Name</th>
                  <th>Field alias name</th>
                  <th>Order</th>
                  <th>Action</th>
                  <th>Delete Custom Field</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;foreach($allfields as $data){?>
                <tr>
                  <td>
                    <input type="checkbox" value="<?php echo $data['Form']['id']?>" name="data[<?php echo $i;?>][CollegeForm][form_id]" <?php echo !empty($data['CollegeForm']['id']) ? 'checked' : '';?>>
                    <input type="hidden" value="<?php echo @$data['CollegeForm']['id']?>" name="data[<?php echo $i;?>][CollegeForm][id]">
                    <input type="hidden" value="<?php echo @$collegeId?>" name="data[<?php echo $i;?>][CollegeForm][college_id]">
                    
                  </td>
                  <td>
                    <?php echo $data['Form']['name']?>
                  </td>
                  <td>
                    <input type="text" name="data[<?php echo $i;?>][CollegeForm][alias]" value="<?php echo @$data['CollegeForm']['alias']?>"> 
                  </td>
                  <td>
                    <input type="number" name="data[<?php echo $i;?>][CollegeForm][field_order]" value="<?php echo @$data['CollegeForm']['field_order']?>">
                  </td>
                  <td>
                    <?php if(!empty($data['CollegeForm']['id'])){?>
                    <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/CollegeForm/'.base64_encode($data['CollegeForm']['id'])?>"><i class="fa fa-trash"></i></a> 
                    <?php }?>
                  </td>
                  <td>
                    <?php if($data['Form']['college_id'] != '0'){?>
                    <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/Form/'.base64_encode($data['Form']['id'])?>"><i class="fa fa-trash"></i></a> 
                    <?php }else{ echo "N/A";}?>
                  </td>
                </tr>
                <?php $i++;}?>
                
                </tbody>
              </table>


            </div>
            <!-- /.box-body -->
             <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>