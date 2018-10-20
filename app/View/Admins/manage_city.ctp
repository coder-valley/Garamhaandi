<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage City
        <a href="<?php echo HTTP_ROOT?>Admins/addCity" class="btn btn-primary">Add City</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Admins/manageCity">Manage City</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">City Listing</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="city-listing" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>State</th>
                  <th>City Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($countries as $country){?>
                <tr>
                  <td>
                    <?php echo $country['State']['statename']?>
                  </td>
                  <td>
                    <?php echo $country['City']['city_name']?>
                  </td>
                  <td>
                    <!-- <a title="Edit" href="<?php echo HTTP_ROOT.'Colleges/editCollege/'.$college['College']['id']?>"><i class="fa fa-edit"></i></a>  -->
                    <a title="Delete" href="<?php echo HTTP_ROOT.'Admins/delete/City/'.base64_encode($country['City']['id'])?>"><i class="fa fa-trash"></i></a> 
                  </td>
                </tr>
                <?php }?>
                
                </tbody>
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