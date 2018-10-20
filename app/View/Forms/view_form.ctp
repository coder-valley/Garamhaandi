<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Form/viewForm">View Form</a></li>
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
              <h3 class="box-title">View Form Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-college-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                <?php $i=1;foreach($allfields as $field){?>
                  <?php if($field['Form']['type'] == '1'){?>  
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo $field['Form']['name']?></label>
                    <input readony type="text" class="form-control <?php echo $field['Form']['required'] == '1' ? 'required' : '';?>" placeholder="Enter <?php echo $field['Form']['name']?>" name="data[Form][<?php echo $i;?>][value]" >
                    <input type="hidden" name="data[Form][<?php echo $i;?>][form_id]" value="<?php echo $field['Form']['id']?>">
                    <input type="hidden" name="data[Form][<?php echo $i;?>][field_type]" value="<?php echo $field['Form']['type']?>">
                  </div>
                  <?php }else if($field['Form']['type'] == '2'){ ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo $field['Form']['name']?></label>
                      <textarea readony class="form-control <?php echo $field['Form']['required'] == '1' ? 'required' : '';?>" placeholder="Enter <?php echo $field['Form']['name']?>" name="data[Form][<?php echo $i;?>][value]" ></textarea>
                      <input type="hidden" name="data[Form][<?php echo $i;?>][form_id]" value="<?php echo $field['Form']['id']?>">
                      <input type="hidden" name="data[Form][<?php echo $i;?>][field_type]" value="<?php echo $field['Form']['type']?>">
                    </div>
                   <?php }else if($field['Form']['type'] == '3'){ ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo $field['Form']['name']?></label>
                      <select readony class="form-control <?php echo $field['Form']['required'] == '1' ? 'required' : '';?>" name="data[Form][<?php echo $i;?>][formmeta_id]" >
                        <?php foreach($field['FormMeta'] as $option){?>
                          <option value="<?php echo $option['id']?>"><?php echo $option['value']?></option>
                        <?php }?>
                      </select>
                      <input type="hidden" name="data[Form][<?php echo $i;?>][form_id]" value="<?php echo $field['Form']['id']?>">
                      <input type="hidden" name="data[Form][<?php echo $i;?>][field_type]" value="<?php echo $field['Form']['type']?>">
                    </div>
                   <?php }else if($field['Form']['type'] == '4'){ ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo $field['Form']['name']?></label>
                        <?php foreach($field['FormMeta'] as $option){?>
                        <input readony type="checkbox" class=" <?php echo $field['Form']['required'] == '1' ? 'required' : '';?>" placeholder="Enter <?php echo $field['Form']['name']?>" name="data[Form][<?php echo $i;?>][value][]" value="<?php echo $option['id']?>"><?php echo $option['value']?>
                        <?php }?>
                        <input type="hidden" name="data[Form][<?php echo $i;?>][field_type]" value="<?php echo $field['Form']['type']?>">
                        <input type="hidden" name="data[Form][<?php echo $i;?>][form_id]" value="<?php echo $field['Form']['id']?>">
                      </div> 
                   <?php }else if($field['Form']['type'] == '5'){ ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo $field['Form']['name']?></label>
                        <?php foreach($field['FormMeta'] as $option){?>
                        <input readony type="radio" class=" <?php echo $field['Form']['required'] == '1' ? 'required' : '';?>"  name="data[Form][<?php echo $i;?>][value]" value="<?php echo $option['id']?>"><?php echo $option['value']?>
                        <?php }?>
                        <input type="hidden" name="data[Form][<?php echo $i;?>][field_type]" value="<?php echo $field['Form']['type']?>">
                        <input type="hidden" name="data[Form][<?php echo $i;?>][form_id]" value="<?php echo $field['Form']['id']?>">
                      </div>
                  <?php }?>  
                <?php $i++;} ?>
                </div>
              <!-- /.box-body -->

              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> -->
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