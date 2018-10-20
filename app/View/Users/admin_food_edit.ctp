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
.container_load{
	margin: 0px auto;
	width: 100px;
	position: absolute;
	top: 69%; left: 49%;
 }
 .loading_overlay
	{
		background-color: #E3E3E3;		
		height: 100%;
		left: 0;
		opacity: 0.3;
		position: fixed;
		top: 0;
		width: 100%;
		//z-index: 9999;
	}
</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>Edit Dish Details</h1>
		<span></span>
	</div>
		<div id="top-buttons">

		</div>

</div>

		
<div id="page-layout">
	<div id="page-content">
		<div id="page-content-wrapper">
			<a style="margin-bottom:10px;" class="ui-state-default ui-corner-all float-right ui-button" href="javascript:void(0);" onclick="history.go(-1)">Back</a>
			<div class="inner-page-title">
				<h2>Edit Dish Details</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>Edit Dish Details
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" action="" id="editDetail" >
							  <input type="hidden" name="id" value="<?php  echo $id;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Title</label>
									<div>
									<input name="title" class="field text full required" type="text" 
										value="<?php echo $details['Food']['title']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc" >Description</label>
									<div>
										<input name="description"  class="field text full required" type="text" value="<?php echo $details['Food']['description']; ?>">
									</div>
								</li>
								<?php //pr($details);die;?>
									<li>
								    <label class="desc">Category<em style="color:red;">*</label>
								     <div>
									    <select name="category">
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
								</li>
								<li>
									<label class="desc">SubCategory<em style="color:red;">*</label>
								    <div>
								     	<select name="subcategory">
										  <option disabled="disabled" value="" class="required">select</option>
										<option value="Breakfast" <?php echo $details['Food']['subcategory']=='Breakfast'?'selected':'';?>>Breakfast</option>
										<option value="Lunch" <?php echo $details['Food']['subcategory']=='Lunch'?'selected':'';?>>Lunch</option>
										<option value="Snacks" <?php echo $details['Food']['subcategory']=='Snacks'?'selected':'';?>>Snacks</option>
										<option value="Dinner" <?php echo $details['Food']['subcategory']=='Dinner'?'selected':'';?>>Dinner</option>
										</select> 
								    </div>
								</li>
								<li>
									<label class="desc" >Price</label>
									<div>
										<input name="price"  class="field text full required number" min="0" value="<?php echo $details['Food']['price']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc">Type<em style="color:red;">*</label>
									<div>
										<label class="radio-inline remove">
        									<input type="radio" required value="Veg" name="type" value="<?php echo $details['Food']['type']; ?>">Veg
        								</label>
     									<label class="radio-inline remove">
   											<input type="radio" value="NonVeg" name="type" value="<?php echo $details['Food']['type']; ?>">NonVeg
       									</label>     
									</div>
								</li>
								<li>
									<input class = "sub-bttn" type="submit" value = "Submit"/>
								</li>							
								
							</ul>
						</fieldset>
					</form>
						</div>
                    	

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
	<div class="clear"></div>