<!-- <link href="/GaramHaandi/Newfolder/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/GaramHaandi/Newfolder/js/bootstrap.min.js"></script> -->

<link href="/GaramHaandi/Newfolder/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />

<script src="/GaramHaandi/Newfolder/js/bootstrap-multiselect.js" type="text/javascript"></script>
	<style>
	.imagedash{
		width: 50%;
	}
	
	.leftside{
		text-align: center;
	}
	.rightside{
		text-align: right;
	}
	.Date
	{
		font-weight: 900;
		font-size: 20px;
		background-color: #29a79c;
		color: white;
		text-align: center;
	}
	.error 
	{
		color: red;
	}

	.button123
	{
		background: #29a79c!important;
		border:none;
		color: white!important;
	}
	.button123:hover
	{
		opacity: 0.8;
		border:none;
		color: white!important;
	}
	.cancelbtn:hover{
		opacity: 0.8;
	}
</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top: 55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome to GaramHaandi</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <div class="col-md-3 aboutheadmain m-b-50 leftside">
	        	<?php echo $this->element('frontElements/sidebar');?>
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Edit Your Details</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
	        <form name="myform" id="editDetail" class="pager-form" method="post" enctype="multipart/form-data" action="">
  				<table class="table table-hover">
  					<input type="hidden" name="id" value="<?php  echo $id;?>"/>
   					<tbody>
   						<tr>
	     				 	<td>
								<label class="desc" >Name<em style="color:red;">*</label>
							</td>
							<td>
								<input name="name" class="field form-control  text full required" type="text" value="<?php echo $details['Kitchen']['name']; ?>" >
							</td>
	   				   	</tr>
   						<tr>
	     				 	<td>
								<label class="desc" >Email Id<em style="color:red;">*</label>
							</td>
							<td>
								<input type="email" class="field form-control text full required"  name="email" value="<?php echo $details['Kitchen']['email']; ?>">
								<div style="color:red;float:left;" id="respon"></div>
							</td>
	   				   	</tr>
	   				   	<tr>
	   				   		<td>
	   				   			<label class="desc">Mobile Number<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<input name="contact_no" min="0" minlength="10" maxlength="10" class="field text full required number designinput001"  value="<?php echo $details['Kitchen']['contact_no']; ?>" >
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">Address<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<input name="address"  class="field text full required designinput001" type="text" value="<?php echo $details['Kitchen']['address']; ?>">
							</td>
						</tr>
						<tr>
							<td><label class="desc">Country<em style="color:red;">*</label></td>
							<td>
								<select class="form-control country_change required" id="country" name="country">
								<option value="" disabled="disabled" selected="selected" class="required">select</option>
								<?php foreach ($count as $counting){?>
								<option value="<?php echo @$counting['Country']['id']; ?>"
							     <?php echo @$counting['Country']['id']== $details['Kitchen']['country'] ? 'selected':'';?> >
							    <?php echo @$counting['Country']['country_name']; ?></option>
							    <?php } ?>
								</select> 
							</td>
						</tr>
						<tr>
							<td><label class="desc">State<em style="color:red;">*</label></td>
							<td>
								<select class="form-control state_change required" id="state" name="state">
							    <option value="" class="required" disabled >select</option>
							    <?php foreach ($state_list as $rst){?>
							    <option value="<?php echo @$rst['State']['id']; ?>"
							    <?php echo @$rst['State']['id']==$details['Kitchen']['state']?'selected':'';?> > 
							    <?php echo @$rst['State']['statename']; ?></option>
							    <?php }  ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="desc">City<em style="color:red;">*</label></td>
							<td>
								<select class="form-control city_change required" id="city" name="city">
							    <option value="" class="required" >select</option>
							    <?php foreach ($city_list as $city){?>
							    <option  value="<?php echo @$city['City']['id']; ?>"
							    <?php echo @$city['City']['id']==$details['Kitchen']['city']?'selected':'';?>>
							    <?php echo @$city['City']['city_name']; ?> </option>
							    <?php }  ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="desc">Location<em style="color:red;">*</label></td>
							<td class="location-select">
								<select class="form-control required location-select" id="location" name="data[Kitlocation][location_id][]" multiple="multiselect"">
							    <!-- <option value="" class="required">select</option> -->
							    <?php foreach ($location_list as $location){?>
							    <option value="<?php echo @$location['Location']['id']; ?>"
							    <?php echo in_array($location['Location']['id'],$kitlocate) ? 'selected' : '';?>>
							    <?php echo @$location['Location']['location']; ?></option>
							    <?php }  ?>
								</select>
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">Pincode<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
									<input name="pincode" class="field text full designinput001 required" min="0" minlength="6" maxlength="6" value="<?php echo $details['Kitchen']['pincode']; ?>" required>
								</div>
							</td>
						</tr>
						<tr>
	   				   		<td>
								<label class="desc" >Update Profile Picture<em style="color:red;">*</label>
							</td>
							<td>
								<input class="field text full required" name="image" type="file" data-validate="required">
							</td>
						</tr>
  				  	</tbody>
 				</table>
 				<div class="center">
 					<input type="submit" id="btnsub" class="btn button123" style="margin-left: 39.7%;" value="Submit">
 					<input type="submit" id="btnsub" class="btn cancelbtn" style="margin-left: 1%;background-color: #990002; color: white;padding: 5px;width: 8.5%;" value="Cancel">
 				</div>
 				</form>
			</div>
	        </div>
	      </div>
	      </div>

	    </div>
	  </div>
</section>

<script type="text/javascript" src="/GaramHaandi/js/common/jquery.validate.js"></script>
<script type="text/javascript">
  $('#editDetail').validate();
</script>

<script type="text/javascript">
  $(document).ready(function(){
      $(".country_change").change(function(){

        var id = $(this).val();
          $.ajax({url: "<?php echo HTTP_ROOT.'users/getstates/'?>"+id, 
          	success: function(resp){
          		//alert(resp);
            var res = JSON.parse(resp);
            //console.log(res);
            //  $("#cnt").children().remove();
              $(".state_change").html(res);
          }});
      });
      $(".state_change").change(function(){

        var id = $(this).val();
          $.ajax({url: "<?php echo HTTP_ROOT.'users/getcities/'?>"+id, 
          	success: function(resp){
          		//alert(resp);
            var res = JSON.parse(resp);
            //console.log(res);
            //  $("#cnt").children().remove();
              $(".city_change").html(res);
          }});
      });
       $(".city_change").change(function(){

        var id = $(this).val();
          $.ajax({
          	url: "<?php echo HTTP_ROOT.'users/getlocations/'?>"+id, 
          	success: function(resp){
          		//alert(resp);
            var res = JSON.parse(resp);
            //console.log(res);
            //  $("#cnt").children().remove();
              $(".location-select").html(res);
             // $('#location1').multiselect('refresh');
             var s = document.createElement("script");
				s.type = "text/javascript";
				s.src = "/GaramHaandi/Newfolder/js/bootstrap-multiselect.js";
				$("head").append(s);
              $('body #location').multiselect();
          	}
          });
      });
  });
  $('#location').multiselect({
        includeSelectAllOption: true
    }); 
    $('#btnSelected').click(function () {
        var selected = $("#location option:selected");
        var message = "";
        selected.each(function () {
            message += $(this).text() + " " + $(this).val() + "\n";
        });
        alert(message);
    });
</script>