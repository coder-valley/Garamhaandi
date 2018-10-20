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
	.design1234:hover{
		opacity: 0.8!important;
	}
</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top: 55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Edit Your Previously added Food</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <div class="col-md-3 aboutheadmain m-b-50 leftside">
	        	<?php echo $this->element('frontElements/sidebar');?>
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Edit Your Dish</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
	        <form name="myform" id="tableForm" class="pager-form" method="post"  action="" enctype="multipart/form-data">
  				<table class="table table-hover" style="width: 100%">
  					<input type="hidden" name="id" value="<?php  echo $id;?>"/>
   					<tbody>
   						<tr>
	     				 	<td>
								<label class="desc" >Title<em style="color:red;">*</label>
							</td>
							<td>
								<input name="title" class="field form-control  text full required" type="text" value="<?php echo $details['Food']['title']; ?>" >
							</td>
	   				   	</tr>
   						<tr>
	     				 	<td>
								<label class="desc" >Description<em style="color:red;">*</label>
							</td>
							<td>
								<textarea class="field form-control  text full required"  name="description"><?php echo $details['Food']['description']; ?></textarea>
								<div style="color:red;float:left;" id="respon"></div>
							</td>
	   				   	</tr>
	   				   	<tr>
	   				   		<td>
	   				   			<label class="desc">Category<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
								    <select class="form-control" name="category">
									<option disabled="disabled"  value="" class="required">select</option>
									<option value="Monday" <?php echo $details['Food']['category']=='Monday'?'selected':'';?> >Monday</option>
									<option value="Tuesday" <?php echo $details['Food']['category']=='Tuesday'?'selected':'';?> >Tuesday</option>
									<option value="Wednesday" <?php echo $details['Food']['category']=='Wednesday'?'selected':'';?> >Wednesday</option>
									<option value="Thursday" <?php echo $details['Food']['category']=='Thursday'?'selected':'';?>>Thursday</option>
									<option value="Friday" <?php echo $details['Food']['category']=='Friday'?'selected':'';?>>Friday</option>
									<option value="Saturday" <?php echo $details['Food']['category']=='Saturday'?'selected':'';?>>Saturday</option>
									<option value="Sunday" <?php echo $details['Food']['category']=='Sunday'?'selected':'';?>>Sunday</option>
										</select> 
								</div>
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">SubCategory<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
									<select name="subcategory" class="form-control ">
										<option disabled="disabled" value="" class="required">select</option>
										<option value="Breakfast" <?php echo $details['Food']['subcategory']=='Breakfast'?'selected':'';?>>Breakfast</option>
										<option value="Lunch" <?php echo $details['Food']['subcategory']=='Lunch'?'selected':'';?>>Lunch</option>
										<option value="Snacks" <?php echo $details['Food']['subcategory']=='Snacks'?'selected':'';?>>Snacks</option>
										<option value="Dinner" <?php echo $details['Food']['subcategory']=='Dinner'?'selected':'';?>>Dinner</option>
									</select>
								</div>
							</td>
						</tr>

						<tr>
	   				   		<td>
	   				   			<label class="desc">Price<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
									<input class="form-control field text full required number" maxlength="10" id="description" name="price" type="text" value="<?php echo $details['Food']['price']; ?>">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label class="desc" >Choose Image<em style="color:red;">*</label>
							</td>
							<td>
								<input class="field text full" name="image" type="file">
							</td>
								<?php if(!empty($details['Food']['image'])){?>
							<td>
								<img class="img-size" src="<?php echo HTTP_ROOT.'img/food/'.$details['Food']['image'] ?>">
							</td>	
							<?php }?>
						</tr>
	     				
  				  	</tbody>
 				</table>
 				<div class="center">
 					<input type="submit" id="btnsub" class="btn btn-primary buttoncolor design1234" style="margin-left: 40%;" value="Submit">
 				</div>
 				</form>
			</div>
	        </div>
	      </div>
	      </div>

	    </div>
	  </div>
</section>
<script src="<?php echo HTTP_ROOT ?>js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo HTTP_ROOT ?>js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo HTTP_ROOT ?>js/pages/base_forms_validation.js"></script>
</script>
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
</script>