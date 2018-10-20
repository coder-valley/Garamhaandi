<div id="sub-nav">
	<div class="page-title">
		<h1>ADD FOOD</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add FOOD</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add FOOD
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="">
					<fieldset>
							<ul>
							    <li>
									    <label class="desc required" >Title<em style="color:red;">*</label>
									     <div>
										      <input class="field text full required"  name="data[Food][title]" type="text">
										        <div style="color:red;float:left;" id="respon"></div>	
									     </div>
								</li>
								   
							    <li>
									    <label class="desc required">Description<em style="color:red;">*</label>
									    <div>
										    <input class="field text full required" id="description" name="data[Food][description]" type="text">
									    </div>
								</li>
								
								<li>
								    <label class="desc required">Price<em style="color:red;">*</label>
								    <div>
									    <input class="field text full number required" maxlength="10" id="price" name="data[Food][price]" type="text">
								    </div>
								</li>

								<li>
									    <label class="desc">Category<em style="color:red;">*</label>
									     <div>
										    <select name="data[Food][category]" required>
										    <option disabled="disabled" selected="selected" value="">select</option>
										    <option value="Monday">Monday</option>
											<option value="Tuesday">Tuesday</option>
											<option value="Wednesday">Wednesday</option>
											<option value="Thursday">Thursday</option>
											<option value="Friday">Friday</option>
											<option value="Saturday">Saturday</option>
											<option value="Sunday">Sunday</option>
											</select> 
									     </div>
								</li>
								<li>
									<label class="desc">SubCategory<em style="color:red;">*</label>
								    <div>
								     	<select name="data[Food][subcategory]" required>
										  <option disabled="disabled" selected="selected" value="">select</option>
											<option value="Breakfast">Breakfast</option>
											<option value="Lunch">Lunch</option>
											<option value="Snacks">Snacks</option>
											<option value="Dinner">Dinner</option>
										</select> 
								    </div>
								</li>

								<li>
									<label class="desc">Type<em style="color:red;">*</label>
									<div>
										<label class="radio-inline remove">
        									<input type="radio" required value="Veg" name="data[Food][type]">Veg
        								</label>
     									<label class="radio-inline remove">
   											<input type="radio" value="NonVeg" name="data[Food][type]">NonVeg
       									</label>     
									</div>
								</li>   
								   <li>
									       <input type="submit" id="btnsub" value="Submit">
								   </li>													
							</ul>
						</fieldset>
					</form>	
					</div>                        

				</div>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
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

	 			"data[Category][category]":
				{
					required:true,
		  },
		  "data[Category][description]":
				{
					required:true,
		  }
			}
	});
	
	});
</script>