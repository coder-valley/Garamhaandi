<style>
  a.fafa-icons{
      margin-left: 10px;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Form
        <a href="<?php echo HTTP_ROOT?>Forms/addField" class="btn btn-primary">Add Field</a>
        <a href="<?php echo HTTP_ROOT?>Forms/viewForm" class="btn btn-primary">View Form</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Forms/manageCollege">Manage Form</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">College Listing</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="college-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>type</th>
                  <th>required</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allFields as $field){?>
                <tr>
                  <td>
                    <?php echo $field['Form']['name']?>
                  </td>
                  <td>
                    <?php if($field['Form']['type'] == '1')
                            echo "text";
                          else if($field['Form']['type'] == '2')
                            echo "textarea";
                          else if($field['Form']['type'] == '3')
                            echo "select";
                          else if($field['Form']['type'] == '4')
                            echo "Checkbox";
                          else 
                            echo "RadioButton";
                    ?>
                  </td>
                   <td>
                    <?php echo $field['Form']['required'] == '1' ? 'Required' : 'Not Required'?>
                  </td>
                  <td>
                    <a class="fafa-icons" title="Edit" href="<?php echo HTTP_ROOT.'Forms/addField/'.$field['Form']['id']?>"><i class="fa fa-edit"></i></a> 
                    <?php if($field['Form']['type'] == '3' || $field['Form']['type'] == '4' || $field['Form']['type'] == '5'){?>
                      <a class="fafa-icons" title="Add Option" href="<?php echo HTTP_ROOT.'Forms/manageOption/'.$field['Form']['id']?>"><i class="fa fa-eye"></i></a> 
                    <?php }?>  
                    <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/Form/'.base64_encode($field['Form']['id'])?>"><i class="fa fa-trash"></i></a> 
                  </td>
                </tr>
                <?php }?>
                
                </tfoot>
              </table>
               <div class="pagination-div dataTables_paginate paging_simple_numbers" id="srch1">
                <ul class="pagination">
                  <li class="paginate_button previous"><?php echo $this->Paginator->prev(' << ' . __(''),array(),null,array('class' => 'prev disabled'));?></li>
                  <li><?php echo $this->Paginator->numbers(array('separator'=>null));?></li>
                  <li class="paginate_button next"><?php echo $this->Paginator->next(' >> ' . __(''),array(),null,array('class' => 'next disabled'));?></li>
                 
               </ul>
              </div>
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