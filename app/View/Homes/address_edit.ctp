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
		background-color: #0c786b;
		color: white;
		text-align: center;
	}
	.error 
	{
		color: red;
	}
	.btn1234
	{
		background-color: #990002;
		color: white;
	}
	.button123
	{
		background: #0C786B!important;
		border:none;
		color: white;
	}
</style>

<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20">
	    <div class="col-md-12 aboutheadmain m-b-50" style="margin-top:16px">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome to GaramHaandi</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <?php echo $this->element('frontElements/user_sidebar');?>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Edit Your Address</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
	        <form name="myform" id="edituadetail" class="pager-form" method="post"  action="">
	        	<input type="hidden" name="id" value="<?php  echo $id;?>"/>
  				<table class="table table-hover">
   					<tbody>
						<!-- <tr>
							<td><label class="desc">Country<em style="color:red;">*</label></td>
							<td>
								<select class="form-control country_change" id="country" name="country" >
								<option value="" class="required">select</option>
								<?php foreach ($count as $counting){?>
								<option value="<?php echo @$counting['Country']['id']; ?>"
							     <?php echo @$counting['Country']['id']== $details['Address']['country'] ? 'selected':'';?> >
							    <?php echo @$counting['Country']['country_name']; ?></option>
							    <?php } ?>
								</select> 
							</td>
						</tr> -->
						<tr>
							<td><label class="desc">State<em style="color:red;">*</label></td>
							<td>
								<select class="form-control required state_change" id="state" name="state" required>
							    <option disabled="disabled" selected="selected" >select</option>
							    <?php  foreach ($state_list as $rst){?>
								    <option value="<?php echo @$rst['State']['id']; ?>"
								    	<?php echo @$rst['State']['id']==$details['Address']['state']?'selected':'';?> >
								    	<?php echo @$rst['State']['statename']; ?>
								    		
								    </option>
							    <?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="desc">City<em style="color:red;">*</label></td>
							<td>
								<select class="form-control city_change" id="city" name="city">
								    <option value="" class="required" disabled >select</option>
								    <?php foreach ($city_list as $city){?>
								    <option  value="<?php echo @$city['City']['id']; ?>"
								    <?php echo @$city['City']['id']==$details['Address']['city']?'selected':'';?>>
								    <?php echo @$city['City']['city_name']; ?> </option>
								    <?php }  ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="desc">Location<em style="color:red;">*</label></td>
							<td>
								<select class="form-control location-select required" id="location" name="location">
								    <option value="" class="required" disabled >select</option>
								    <?php foreach ($location_list as $locate){?>
								    <option  value="<?php echo @$locate['Location']['id']; ?>"
								    <?php echo @$locate['Location']['id']==$details['Address']['location']?'selected':'';?>>
								    <?php echo @$locate['Location']['location']; ?> </option>
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
									<input name="pincode" class="field text full required number" min="0" minlength="6" maxlength="6" value="<?php echo $details['Address']['pincode']; ?>" >
								</div>
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">Address<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<input name="adress" class="field text full required" type="text" value="<?php echo $details['Address']['adress']; ?>" >
							</td>
						</tr>
  				  	</tbody>
 				</table>
 				<div class="center">
 					<input type="submit" id="btnsub" class="btn button123" style="margin-left: 37%;" value="Submit">
 					<a type="submit" id="btnsub" class="btn btn1234" href="<?php echo HTTP_ROOT.'/Homes/user_address/'.base64_encode($this->Session->read('User.id'));?>" >Cancel</a>
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
$('#edituadetail').validate();
</script>
<script type="text/javascript">
  $(document).ready(function(){
      // $(".country_change").change(function(){

      //   var id = $(this).val();
      //     $.ajax({url: "<?php echo HTTP_ROOT.'homes/getstates/'?>"+id, 
      //     	success: function(resp){
      //     		//alert(resp);
      //       var res = JSON.parse(resp);
      //       //console.log(res);
      //       //  $("#cnt").children().remove();
      //         $(".state_change").html(res);
      //     }});
      // });
      $(".state_change").change(function(){

        var id = $(this).val();
          $.ajax({url: "<?php echo HTTP_ROOT.'homes/getcities/'?>"+id, 
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
          $.ajax({url: "<?php echo HTTP_ROOT.'homes/getlocations/'?>"+id, 
          	success: function(resp){
          		//alert(resp);
            var res = JSON.parse(resp);
            // console.log(res);
            //  $("#cnt").children().remove();
              $(".location-select").html(res);
          	}
      	});
      });
  });
</script>