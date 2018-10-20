<?php echo $this->Html->script('newadmin/jquery.validate.js'); ?>
<script type="text/javascript">
$(document).ready(function() {
		
	$('#editDetail').validate(
	{
		rules:
		{
			"data[User][username]":
			{
				required:true
			},
			"data[User][email]":
			{
				required:true,
			}
		},
		messages:
		{
			"data[User][username]":
			{
				required:'This field is required.'
			},
			"data[User][password]":
			{
				required:'This field is required.'
			}
		}
	});
	
});
</script>
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
	.btn1234
	{
		background-color: #990002;
		color: white!important;
		margin-top: 1%;
	}
	.btn1234:hover{
		opacity: 0.8;
		color: white!important;
	}
</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top: 55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Edit Your Profile</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <?php echo $this->element('frontElements/user_sidebar');?>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Edit Your Details</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
	        <form name="myform" id="editDetail" class="pager-form" method="post"  enctype="multipart/form-data">
  				<table class="table table-hover">
  					<input type="hidden" name="id" value="<?php  echo $id;?>"/>
   					<tbody>
   						<tr>
	     				 	<td>
								<label class="desc" >Name<em style="color:red;">*</label>
							</td>
							<td>
							 <input name="name" class="field form-control text full i required" data-validate="required"  style="border:none;" type="text" value="<?php echo $details['User']['name']; ?>" >
							</td>
	   				   	</tr>
   						<tr>
	     				 	<td>
								<label class="desc" >Email Id<em style="color:red;">*</label>
							</td>
							<td>
								<input type="email" class="field form-control text full required" data-validate="required,email" style="border:none;" name="email" value="<?php echo $details['User']['email']; ?>">
								<div style="color:red;float:left;" id="respon"></div>
							</td>
	   				   	</tr>
	   				   	<tr>
	   				   		<td>
	   				   			<label class="desc">Mobile Number<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<input name="contact_no" min="0" data-validate="required,number" minlength="10" maxlength="10" class=" form-control field text full required number" style="border:none;" value="<?php echo $details['User']['contact_no']; ?>" >
							</td>
						</tr>
						<tr>
	   				   		<td>
								<label class="desc" >Update Profile Picture<em style="color:red;">*</label>
							</td>
							<td>
								<input class="field text full required" name="image" type="file" data-validate="required">
							</td>
								<?php if(!empty($details['User']['image'])){?>
							<!-- <td>
								<img class="img-size" src="<?php echo HTTP_ROOT.'img/usereimg/'.$details['User']['image'] ?>">
							</td>	 -->
							<?php }?>
						</tr>
						
  				  	</tbody>
 				</table>
 				<div class="center">
 					<button type="submit" id="btnsub" class="btn btn-primary" style="margin-left: 37.5%; width: 10%; background-color: #29a79c; border-color: #29a79c">Submit</button>
 					<a type="submit" id="btnsub" class="btn btn1234" style="width: 10%;color: white;" onclick="history.go(-1);" href="<?php echo HTTP_ROOT.'/Homes/user_dashboard/'.base64_encode($this->Session->read('User.id'));?>">Cancel</a>
 				</div>
 				</form>
			</div>
	        </div>
	      </div>
	      </div>

	    </div>
	  </div>
</section>
<!-- <script src="<?php echo HTTP_ROOT ?>js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo HTTP_ROOT ?>js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo HTTP_ROOT ?>js/pages/base_forms_validation.js"></script> -->
</script><!-- 
<script type="text/javascript">
$('#tableForm').validate();
</script>
<script>
	$(document).ready(function(){

		$('#tableForm').validate({
			rules:
			{

	 			"data[Food][category]":
				{
					required:true,
		  },
		  "data[Food][subcategory]":
				{
					required:true,
		  }
			}
	});
	
	});
</script> -->
<!-- <script type="text/javascript">
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
          $.ajax({url: "<?php echo HTTP_ROOT.'users/getlocations/'?>"+id, 
          	success: function(resp){
          		//alert(resp);
            var res = JSON.parse(resp);
            //console.log(res);
            //  $("#cnt").children().remove();
              $(".location_change").html(res);
          }});
      });
  });
</script> -->