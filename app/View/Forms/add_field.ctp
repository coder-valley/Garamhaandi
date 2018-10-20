<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Field
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT?>Admins/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo HTTP_ROOT?>Form/addField">Add Field</a></li>
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
              <h3 class="box-title">Add Field Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="add-college-form" method='post' enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" class="form-control"  name="data[Form][id]" value="<?php echo @$form['Form']['id']?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control required" placeholder="Enter Name" name="data[Form][name]" value="<?php echo @$form['Form']['name']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Type</label>
                  <Select type="text" class="form-control required"  name="data[Form][type]" id= "field-type">
                    <option value="1" <?php echo @$form['Form']['type'] == '1' ? 'selected' : '';?> >text</option>
                    <option value="2" <?php echo @$form['Form']['type'] == '2' ? 'selected' : '';?> >textarea</option>
                    <option value="3" <?php echo @$form['Form']['type'] == '3' ? 'selected' : '';?>>select</option>
                    <option value="4" <?php echo @$form['Form']['type'] == '4' ? 'selected' : '';?>>checkbox</option>
                    <option value="5" <?php echo @$form['Form']['type'] == '5' ? 'selected' : '';?>>RadioButton</option>
                  </Select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Required</label>
                  <input type="radio" class=" required " placeholder="Required"  name="data[Form][required]" value="1" <?php echo @$form['Form']['required'] == '1' ? 'checked' : '';?>> Yes
                  <input type="radio" class="required " placeholder="Required"  name="data[Form][required]" value="0" value="<?php echo @$form['Form']['required']?>" <?php echo @$form['Form']['name'] == '0' ? 'checked' : '';?>> No
                </div>
                <div id="append-div">
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
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
  </div>