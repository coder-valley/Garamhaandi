<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Option
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Forms/manageForm">Manage Form</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Forms/manageOption/<?php echo $formId?>">Option</a></li>
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
              <h3 class="box-title">Add Option</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-state-form" method='post' enctype="multipart/form-data">
               <div class="box-body">
               <input type="hidden" name="data[Degree][id]" value="<?php echo @$degree['FormMeta']['id']?>">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Option Value</label>
                  <input class="form-control required" placeholder="Option" name="data[FormMeta][value]" value="<?php echo @$degree['FormMeta']['value']?>">
                  
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>


            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">All Option Listing</h3>
              </div>
              <table id="facility-form" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Option</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($alloption as $option){?>
                  <tr>
                    <td>
                      <?php echo $option['FormMeta']['value']?>
                    </td>
                    <td>
                      <a class="fafa-icons" title="Edit" href="<?php echo HTTP_ROOT.'Forms/manageOption/'.$option['FormMeta']['id']?>"><i class="fa fa-edit"></i></a> 
                      <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/FormMeta/'.base64_encode($option['FormMeta']['id'])?>"><i class="fa fa-trash"></i></a> 
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