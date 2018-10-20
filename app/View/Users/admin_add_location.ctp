<div id="sub-nav">
	<div class="page-title">
		<h1>ADD NEW LOCATION</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add LOCATION</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add LOCATION
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="editkit" class="pager-form" method="post"  action="">
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
									<label class="desc">Country<em style="color:red;">*</label>
									<div>
										<select class="form-control country_change required" id="country" name="country">
										<option value="" disabled="disabled" selected="selected" class="required">select</option>
									    <!-- <option disabled="disabled" selected="selected" >select</option> -->
									    <?php foreach ($count as $counting){?>
									    <option value="<?php echo @$counting['Country']['id']; ?>"><?php echo @$counting['Country']['country_name']; ?></option>
									    <?php } ?>
										</select>
									</div>
								</li>

								<li>
									<label class="desc required">State<em style="color:red;">*</label>
								    <div>
									<select class="form-control state_change required" id="state" name="state">
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
									<select class="form-control city_change required" id="city" name="city_id">
									    <option disabled="disabled" selected="selected" >select</option>
									    <?php  /* foreach ($ct as $city){?>
									    <option value="<?php echo @$city['City']['id']; ?>"><?php echo @$city['City']['city_name']; ?></option>
									    <?php } */ ?>
										</select>
									</div>
								</li>
								
								<li>
									<label class="desc">Location<em style="color:red;">*</label>
								    <div>
									    <input class="field text full required" id="description" name="location" type="text">
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
<script src="<?php echo HTTP_ROOT ?>js/admin/jquery.validate.js"></script>

<script type="text/javascript">
$('#editkit').validate();
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