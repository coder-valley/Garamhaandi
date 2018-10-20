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
		<h1>Edit Address Details</h1>
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
				<h2>Edit Address Details</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>Edit Address Details
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" action="" id="editDetail" >
							  <input type="hidden" name="id" value="<?php  echo $id;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Address</label>
									<div>
									<input name="adress" class="field text full required" type="text" 
										value="<?php echo $details['Address']['adress']; ?>" >
									</div>
								</li>
								<!-- <li>
									<label class="desc" >Address Type</label>
									<div>
										<input name="Address Type"  class="field text full required" type="text" value="<?php echo $details['Address']['address_type']; ?>">
									</div>
								</li> -->
								<!-- <li>
								    <label class="desc">Address Type<em style="color:red;">*</label>
								    <div>
									    <select name="address_type">
										<option disabled="disabled" selected="selected" value="" class="required">select</option>
										<option value="Billng" <?php echo $data['Address']['address_type']='1'?'selected':'';?>>Billing</option>
										<option value="Shipping" <?php echo $data['Address']['address_type']='1'?'selected':'';?>>Shipping</option>
										</select> 
								    </div>
								</li> -->
								<li>
									
									<label class="desc">State<em style="color:red;">*</label>
								    <div>
									<select class="form-control state_change" id="state" name="state">
									    <option value="" class="required" disabled >select</option>
									    <?php foreach ($state_list as $rst){?>
									    <option value="<?php echo @$rst['State']['id']; ?>"
									     <?php echo @$rst['State']['id']==$details['Address']['state']?'selected':'';?> > 
									     <?php echo @$rst['State']['statename']; ?></option>
									    <?php }  ?>
										</select>
									</div>
								</li>
								<li>
									<label class="desc">City<em style="color:red;">*</label>
								    <div>
									<select class="form-control city_change" id="city" name="city">
									    <option value="" class="required" disabled >select</option>
									    <?php foreach ($city_list as $city){?>
									    <option  value="<?php echo @$city['City']['id']; ?>"
									    <?php echo @$city['City']['id']==$details['Address']['city']?'selected':'';?>>
									    <?php echo @$city['City']['city_name']; ?> </option>
									    <?php }  ?>
										</select>
									</div>
								</li> 
 
								<li>
									<label class="desc" >Pincode</label>
									<div>
										<input name="pincode" class="field text full required number" min="0" minlength="6" maxlength="6" value="<?php echo $details['Address']['pincode']; ?>" >
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
<script type="text/javascript">
  $(document).ready(function(){
      // $(".country_change").change(function(){

      //   var id = $(this).val();
      //     $.ajax({url: "<?php echo HTTP_ROOT.'users/getstates/'?>"+id, 
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