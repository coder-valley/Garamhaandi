<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Degree
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/manageDegree">Degree</a></li>
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
              <h3 class="box-title">Add Degree</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-state-form" method='post' enctype="multipart/form-data">
               <div class="box-body">
               <input type="hidden" name="data[Degree][id]" value="<?php echo @$degree['Degree']['id']?>">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Degree</label>
                  <input class="form-control required" placeholder="Degree" name="data[Degree][degree]" value="<?php echo @$degree['Degree']['degree']?>">
                  
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>


            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">All Degrees Listing</h3>
              </div>
              <table id="facility-form" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Degree</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($degrees as $degre){?>
                  <tr>
                    <td>
                      <?php echo $degre['Degree']['degree']?>
                    </td>
                    <td>
                      <a class="fafa-icons" title="Edit" href="<?php echo HTTP_ROOT.'Colleges/manageDegree/'.$degre['Degree']['id']?>"><i class="fa fa-edit"></i></a> 
                      <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/Degree/'.base64_encode($degre['Degree']['id'])?>"><i class="fa fa-trash"></i></a> 
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