
<!-- <script type="text/javascript" src="/GaramHaandi/Newfolder/js/jquery-1.11.1.js"></script> -->

<link href="/GaramHaandi/Newfolder/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/GaramHaandi/Newfolder/js/bootstrap.min.js"></script>

<link href="/GaramHaandi/Newfolder/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />

<script src="/GaramHaandi/Newfolder/js/bootstrap-multiselect.js" type="text/javascript"></script>
<style type="text/css">
	.kitalrdyrgstrd
  {
    color: red;
    font-weight: 700;
    text-align: center;
  }
</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>ADD Kitchen</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add Kitchen</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add Kitchen
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="">
					<fieldset>
							<ul>
							    <li>
									    <label class="desc" >Name<em style="color:red;">*</label>
									     <div>
										      <input class="field text full required"  name="data[Kitchen][name]" type="text">
										        <div style="color:red;float:left;" id="respon"></div>	
									     </div>
								</li>
								   
							     <li>
									<label class="desc">Email<em style="color:red;">*</label>
								    <div>
										<input class="field text full required" id="description" name="data[Kitchen][email]" type="email">
								    </div>
								</li>
								<li>
									<label class="desc">Country<em style="color:red;">*</label>
									<div>
										<select class="form-control country_change required" id="country" name="data[Kitchen][country]">
									    <option selected="selected">select</option>
									    <?php foreach ($count as $counting){?>
									    <option value="<?php echo @$counting['Country']['id']; ?>"><?php echo @$counting['Country']['country_name']; ?></option>
									    <?php } ?>
										</select>
									</div>
								</li>

								<li>
									<label class="desc">State<em style="color:red;">*</label>
								    <div>
									<select class="form-control state_change required" id="state" name="data[Kitchen][state]">
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
									<select class="form-control city_change" id="city" name="data[Kitchen][city]" required>
									    <option disabled="disabled" selected="selected" >select</option>
									    <?php  /* foreach ($ct as $city){?>
									    <option value="<?php echo @$city['City']['id']; ?>"><?php echo @$city['City']['city_name']; ?></option>
									    <?php } */ ?>
										</select>
									</div>
								</li>	

								<li>
								    <label class="desc">Location<em style="color:red;">*</label>
								   <div class="location-select">
								    <select class="form-control required location_change" id="location" name="data[Kitlocation][location_name]"  multiple="multiselect" >
									    <option disabled="disabled" selected="selected">select</option>
									    <?php /* foreach ($lctn as $location){?>
									    <option value="<?php echo @$location['location']['id']; ?>"><?php echo @$location['Location']['location']; ?></option>
									    <?php } */ ?>
										</select> 
									</div>
								</li>

								<li>
									<label class="desc">Pincode<em style="color:red;">*</label>
								    <div>
									    <input class="field text full required number" min="0" maxlength="6" id="description" name="data[Kitchen][pincode]" type="text">
								    </div>
								</li>
								<li>
									<label class="desc">Address<em style="color:red;">*</label>
								    <div>
									    <input class="field text full required" id="address" name="data[Kitchen][address]" type="text">
								    </div>
								</li>
								<li>
								    <label class="desc">Min.order(in Rs.)<em style="color:red;">*</label>
								     <div>
									      <input class="field text full required number" min="1" maxlength="10" id="minorder" name="data[Kitchen][min_order]">
								     </div>
								</li>
								<li>
								    <label class="desc">Delivery Time(in Minutes)<em style="color:red;">*</label>
								    <div>
									    <input class="field text full required number" min="1" maxlength="10" id="deltime" name="data[Kitchen][delivery_time]">
								    </div>
								</li>
								<li> 
								    <label class="desc">Contact No.<em style="color:red;">*</label>
								    <div>
								      <input class="field text full required number" min="0" minlength="10" maxlength="10" id="kitnmbr" name="data[Kitchen][contact_no]" type="text">
								      <p class="kitalrdyrgstrd">This mobile number is already registered. Please enter another mobile number.</p>
								    </div>
								</li>
							   <li>
								    <input type="submit" id="btnkitsub" value="Submit">									
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
          $.ajax({url: "<?php echo HTTP_ROOT.'users/getlocations/'?>"+id, 
          	success: function(resp){
          		//alert(resp);
            var res = JSON.parse(resp);
            //console.log(res);
            console.log(res);
            // $('.location-select').children().remove();
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
<!--Nmbr Check on Resgistration START-->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.kitalrdyrgstrd').hide();
      $('#btnkitsub').attr('disabled',true);
      $('#kitnmbr').keyup(function(){
        var kitnumber = $("#kitnmbr").val();
        console.log(kitnumber);
        if($(this).val().length==10)
        {
          $.ajax({
            data: {id: kitnumber},
            type: 'post',
            url: "<?php echo HTTP_ROOT.'users/kitchcknmbr/'?>"+kitnumber,
            success: function(resp)
            {
              if(resp == 'true')
              {
                $('.kitalrdyrgstrd').show();
                $('#btnkitsub').attr('disabled',true);
              }
              else
              {
                $('.kitalrdyrgstrdn').hide();
                $('#kitmblotp').attr('readonly',true);
                $('#btnkitsub').attr('disabled',false);
              }
            }
          })
        }
        else
        {
          $('.kitalrdyrgstrd').hide();
        }
      })
    })
  </script>
<!--Nmbr Check on Resgistration END-->