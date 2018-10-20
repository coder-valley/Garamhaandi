<style>
  a.fafa-icons{
      margin-left: 10px;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Colleges
        <a href="<?php echo HTTP_ROOT?>Colleges/addCollege" class="btn btn-primary">Add Colleges</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Colleges/manageCollege">Manage Colleges</a></li>
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
            <form method="post" action="<?php echo HTTP_ROOT?>Forms/generateForm">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="college-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Check</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($colleges as $college){?>
                <tr>
                  <td>
                    <input type="checkbox" value="<?php echo $college['College']['id']?>" class="check-college-id" name="collegeIds[]">
                  </td>
                  <td>
                    <img src="<?php echo HTTP_ROOT.'img/collegeImages/small/'.$college['College']['image']?>" width="18%">
                  </td>
                  <td>
                    <?php echo $college['College']['name']?>
                  </td>
                  <td>
                    <?php echo $college['College']['email']?>
                  </td>
                   <td>
                    <?php echo $college['College']['phone1']?>
                  </td>
                  <td>
                    <a class="fafa-icons" title="Edit" href="<?php echo HTTP_ROOT.'Colleges/editCollege/'.$college['College']['id']?>"><i class="fa fa-edit"></i></a> 
                    <a class="fafa-icons" title="Manage Near Location" href="<?php echo HTTP_ROOT.'Colleges/collegeNear/'.$college['College']['id']?>"><i class="fa fa-map"></i></a> 
                    <a class="fafa-icons" title="Manage Facilities" href="<?php echo HTTP_ROOT.'Colleges/collegeFacility/'.$college['College']['id']?>"><i class="fa fa-beer"></i></a> 
                    <a class="fafa-icons" title="Manage Courses" href="<?php echo HTTP_ROOT.'Colleges/collegeCourses/'.$college['College']['id']?>"><i class="fa fa-graduation-cap"></i></a> 
                    <a class="fafa-icons" title="Manage About" href="<?php echo HTTP_ROOT.'Colleges/collegeAbout/'.$college['College']['id']?>"><i class="fa fa-info"></i></a>
                    <a class="fafa-icons" title="Manage Form" href="<?php echo HTTP_ROOT.'Forms/collegeForm/'.$college['College']['id']?>"><i class="fa fa-pencil"></i></a> 
                    <a class="fafa-icons" title="Delete" href="<?php echo HTTP_ROOT.'Colleges/delete/College/'.base64_encode($college['College']['id'])?>"><i class="fa fa-trash"></i></a> 
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
            <div class="box-footer">
                <button type="submit" id="view-form" class="btn btn-primary">View form for selected</button>
              </div>
          </div>
          </form>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>