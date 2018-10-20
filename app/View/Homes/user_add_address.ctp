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

	.btn123
	{
		background-color: #29a79c!important;
		border:none;
		color: white!important;
	}
	.btn123:hover{
		opacity: 0.8!important;
		color: white!important;
	}
	.btn1234
	{
		background-color: #990002;
		color: white!important;
	}
	.btn1234:hover
	{
		opacity: 0.8!important;
		color: white!important;
	}
	#btnsub
	{
		margin-left: 1%;
		width: 10%;
		margin-top: 0.9%;
	}
</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top: 55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome to GaramHaandi</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <?php echo $this->element('frontElements/user_sidebar');?>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Add Your Address</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
	        <form name="myform" id="editDetail" class="pager-form" method="post"  action="">
  				<table class="table table-hover">
  					<input type="hidden" name="id" value=""/>
   					<tbody>
						<!-- <tr>
							<td><label class="desc">Country<em style="color:red;">*</label></td>
							<td>
								<select class="form-control country_change" id="country" name="data[Address][country]" required>
							    <option disabled="disabled" selected="selected" >select</option>
							    <?php foreach ($count as $counting){?>
							    <option value="<?php echo @$counting['Country']['id']; ?>"><?php echo @$counting['Country']['country_name']; ?></option>
							    <?php } ?>
								</select> 
							</td>
						</tr> -->
						<tr>
							<td><label class="desc">State<em style="color:red;">*</label></td>
							<td>
								<select class="form-control required state_change" id="state" name="data[Address][state]" required>
							    <option disabled="disabled" selected="selected" >select</option>
							    <?php  foreach ($stt as $rst){?>
							    <option value="<?php echo @$rst['State']['id']; ?>"><?php echo @$rst['State']['statename']; ?></option>
							    <?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="desc">City<em style="color:red;">*</label></td>
							<td>
								<select class="form-control city_change required" id="city" name="data[Address][city]" required>
							    <option disabled="disabled" selected="selected" >select</option>
							    <?php  /* foreach ($ct as $city){?>
							    <option value="<?php echo @$city['City']['id']; ?>"><?php echo @$city['City']['city_name']; ?></option>
							    <?php } */ ?>
								</select>
							</td>
						</tr>
						<tr>
						    <td><label class="desc">Location<em style="color:red;">*</em></label></td>
						   <td>
						    <select class="form-control required location_change" id="location" name="data[Address][location]" >
							    <option disabled="disabled" selected="selected">select</option>
							    <?php /* foreach ($lctn as $location){?>
							    <option value="<?php echo @$location['location']['id']; ?>"><?php echo @$location['Location']['location']; ?></option>
							    <?php } */ ?>
								</select> 
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">Pincode<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
									<input class="field text full number designinput001 required" min="0" maxlength="6" id="description" name="data[Address][pincode]" required="" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
								</div>
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">Address<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<input class="field text full required designinput001 required"  name="data[Address][adress]" type="text" required="">
							</td>
						</tr>
  				  	</tbody>
 				</table>
 				<div class="center">
 				<button type="submit" class="btn btn123" style="margin-left: 24%; width: 10%; background-color: #29a79c; margin-top: .9%;">Submit</button>
 				<a type="submit" id="btnsub" class="btn btn1234" onclick="history.go(-1);" href="<?php echo HTTP_ROOT.'/Homes/user_address/'.base64_encode($this->Session->read('User.id'));?>">Cancel</a>
 				</div>
 				</form>
			</div>
	        </div>
	      </div>
	      </div>

	    </div>
	  </div>
</section>
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
            //console.log(res);
            //  $("#cnt").children().remove();
              $(".location_change").html(res);
		    //           $('#location').multiselect({
		    //     includeSelectAllOption: true
		    // });
          }});
      });
  });
  // $('#location').multiselect({
  //       includeSelectAllOption: true
  //   }); 
  //   $('#btnSelected').click(function () {
  //       var selected = $("#location option:selected");
  //       var message = "";
  //       selected.each(function () {
  //           message += $(this).text() + " " + $(this).val() + "\n";
  //       });
  //       alert(message);
  //   });
</script>