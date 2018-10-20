<div id="sub-nav">
	<div class="page-title">
		<h1>ADD NEW ADDRESS</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add ADDRESS</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add ADDRESS
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="">
					<fieldset>
							<ul>
							 <!-- <li>
									    <label class="desc required" >Title<em style="color:red;">*</label>
									     <div>
										      <input class="field text full required"  name="data[Food][title]" type="text">
										        <div style="color:red;float:left;" id="respon"></div>	
									     </div>
								</li> -->
							    <li>
									<label class="desc required" >Address<em style="color:red;">*</label>
								    <div>
									    <input class="field text full required"  name="data[Address][adress]" type="text">
									    <div style="color:red;float:left;" id="respon"></div>	
								    </div>
								</li>
								
								<!-- <li>
									<label class="desc">Address Type<em style="color:red;">*</label>
								    <div>
									    <select name="data[Address][address_type]" required>
									    <option disabled="disabled" selected="selected" value="" class="required">select</option>
									    <option value="Biiling">Billing</option>
										<option value="Shipping">Shipping</option>
										</select>
									</div>
								</li> -->

								<li>
									<label class="desc">Country<em style="color:red;">*</label>
									<div>
										<select class="form-control country_change" id="country" name="data[Address][country]" required>
									    <option disabled="disabled" selected="selected" >select</option>
									    <?php foreach ($count as $counting){?>
									    <option value="<?php echo @$counting['Country']['id']; ?>"><?php echo @$counting['Country']['country_name']; ?></option>
									    <?php } ?>
										</select>
									</div>
								</li>

								<li>
									<label class="desc">State<em style="color:red;">*</label>
								    <div>
									<select class="form-control required state_change" id="state" name="data[Address][state]">
									    <option disabled="disabled" selected="selected" >select</option>
									    <?php /* foreach ($stt as $rst){?>
									    <option value="<?php echo @$rst['State']['id']; ?>"><?php echo @$rst['State']['statename']; ?></option>
									    <?php } */ ?>
										</select>
									</div>
								</li> 

								<li>
								    <label class="desc">City<em style="color:red;">*</label>
								   <div>
									<select class="form-control city_change" id="city" name="data[Address][city]" required>
									    <option disabled="disabled" selected="selected" >select</option>
									    <?php  /* foreach ($ct as $city){?>
									    <option value="<?php echo @$city['City']['id']; ?>"><?php echo @$city['City']['city_name']; ?></option>
									    <?php } */ ?>
										</select>
									</div>
								</li>
								
								<li>
									<label class="desc">Pincode<em style="color:red;">*</label>
								    <div>
									    <input class="field text full required number" min="0" maxlength="6" id="description" name="data[Address][pincode]" type="text">
								    </div>
								</li>

								<!-- <li>
									<label class="desc">Contact No.<em style="color:red;">*</label>
									<div>
										<input class="field text full required number" minlength="10" maxlength="10" id="description" name="data[User][contact_no]" type="text">
									</div>
								</li> -->

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
  });
</script>