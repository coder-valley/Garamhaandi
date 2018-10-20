<link href="/GaramHaandi/Newfolder/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/GaramHaandi/Newfolder/js/bootstrap.min.js"></script>

<link href="/GaramHaandi/Newfolder/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />

<script src="/GaramHaandi/Newfolder/js/bootstrap-multiselect.js" type="text/javascript"></script>

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
		<h1>Edit Kitchen Details</h1>
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
				<h2>Edit Kitchen Details</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>Edit Kitchen Details
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" id="kit_editdetail" action="" id="editDetail" >
							  <input type="hidden" name="id" value="<?php  echo $id;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Username</label>
									<div>
										<input name="name"  class="field text full required" type="text" value="<?php echo $details['Kitchen']['name']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc" >Email</label>
									<div>
										<input name="email"  class="field text full required" type="email" value="<?php echo $details['Kitchen']['email']; ?>">
									</div>
								</li>
								<li>
									<label class="desc" >Contact No.</label>
									<div>
										<input name="contact_no"  class="field text full required number" min="0" minlength="10" maxlength="10" value="<?php echo $details['Kitchen']['contact_no']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc" >Address</label>
									<div>
										<input name="address"  class="field text full required" type="text" value="<?php echo $details['Kitchen']['address']; ?>">
									</div>
								</li>
								<li>
									<label class="desc">Country<em style="color:red;">*</label>
								    <div>
								     	<select class="form-control required country_change" id="country" name="country">
										<option value="" class="required">select</option>
										<?php foreach ($count as $counting){?>
										<option value="<?php echo @$counting['Country']['id']; ?>"
									     <?php echo @$counting['Country']['id']== $details['Kitchen']['country'] ? 'selected':'';?> >
									    <?php echo @$counting['Country']['country_name']; ?></option>
									    <?php } ?>
										</select> 
								    </div>
								</li>
								<li>
									<label class="desc">State<em style="color:red;">*</label>
								    <div>
									<select class="form-control required state_change" id="state" name="state">
									    <option value="" class="required" disabled >select</option>
									    <?php foreach ($state_list as $rst){?>
									    <option value="<?php echo @$rst['State']['id']; ?>"
									     <?php echo @$rst['State']['id']==$details['Kitchen']['state']?'selected':'';?> > 
									     <?php echo @$rst['State']['statename']; ?></option>
									    <?php }  ?>
										</select>
									</div>
								</li>
								<li>
									<label class="desc">City<em style="color:red;">*</label>
								    <div>
									<select class="form-control required city_change" id="city" name="city">
									    <option value="" class="required" disabled >select</option>
									    <?php foreach ($city_list as $city){?>
									    <option  value="<?php echo @$city['City']['id']; ?>"
									    <?php echo @$city['City']['id']==$details['Kitchen']['city']?'selected':'';?>>
									    <?php echo @$city['City']['city_name']; ?> </option>
									    <?php }  ?>
										</select>
									</div>
								</li>
								<li>
								    <label class="desc">Location<em style="color:red;">*</label>
								   <div class="location-select">
									<select class="form-control required location_change" id="location" name="data[Kitlocation][location_id][]" multiple="multiselect">
									    <option value="" class="required">select</option>
									    <?php foreach ($location_list as $location){?>
									    <option value="<?php echo @$location['Location']['id']; ?>"
									    <?php echo in_array($location['Location']['id'],$kitlocate) ? 'selected' : '';?>>
									    <?php echo @$location['Location']['location']; ?></option>
									    
									    <?php }  ?>
										</select>
									</div>
								</li> 
 
								<li>
									<label class="desc" >Pincode</label>
									<div>
										<input name="pincode" class="field text full required number" min="0" minlength="6" maxlength="6" value="<?php echo $details['Kitchen']['pincode']; ?>" >
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
  	// alert('hello');
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
              $(".location-select").html(res);
              $('#location').multiselect({
        includeSelectAllOption: true
    });
          }});
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