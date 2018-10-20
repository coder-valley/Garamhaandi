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
	.subscribeuser{
		border: solid 1px lightgrey;
    margin-top: 38px;
    margin-left: 27px;
    width: 94%;
    border-radius: 5px;
	}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage" style="margin-top: 16px;">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome to GaramHaandi</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <div class="col-md-3 aboutheadmain m-b-50 leftside">
	        	<img class="imagedash img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg">
	        	<div class="row">
	        		<b>Sumila Kumari</b><br>

	        		<div class="btn-group col-md-12">
 								 <button type="button" class="btn buttondashboard">Profile</button><br>
 								 <button type="button" class="btn buttondashboard">Order Details</button><br>
 								 <button type="button" class="btn buttondashboard">Subscriptions</button><br>
 								 <button type="button" class="btn buttondashboard">Reviews</button><br>
						</div>
	        	</div>
	        	
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50">
		        <div class="row" style="padding-top: 0px!important">
		        	<div class="col-md-12" style="padding-left: 3%; padding-bottom: 3%">
		        		<span style="font-size: 30px; ">Subscribed To</span>
		        	</div><br>
		        <div class="row subscribeuser">
		        	<div class="col-md-2">
		        		<h3><b>Breakfast</b></h3>
		        	</div>
		        	<div class="col-md-6">
		        		<table style="width: 100%">
		        			<tr>
		        				<td>
		        					Monday
		        				</td>
		        				<td>
		        					rice, idli, dosa, pongal
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					Tuesday
		        				</td>
		        				<td>
		        					rice, idli, dosa, pongal
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					Wednesday
		        				</td>
		        				<td>
		        					rice, idli, dosa, pongal
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					Thursday
		        				</td>
		        				<td>
		        					rice, idli, dosa, pongal
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					Friday
		        				</td>
		        				<td>
		        					rice, idli, dosa, pongal
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					Saturday
		        				</td>
		        				<td>
		        					rice, idli, dosa, pongal
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					Sunday
		        				</td>
		        				<td>
		        					rice, idli, dosa, pongal
		        				</td>
		        			</tr>
		        		</table>
		        	</div>
		        	<div class="col-md-2">
		        		<h3><b>PAID: 700</b></h3>
		        	</div>
		        	<div class="col-md-2" style="padding-left: 5px;">
		        		<table>
		        			<tr>
		        				<td><button style="width: 100%" class="btn btn-primary buttoncolor">Subscribe Again</button></td>
		        			</tr>
		        			<tr>
		        				<td><button style="width: 100%" class="btn btn-primary buttoncolor">Cancel</button></td>
		        			</tr>
		        		</table>
		        	</div>
		        	
		        </div>
	        </div>	        	
	        </div>
	         	 
	        
	      </div>
	    </div>
	  </div>
	  </div>
</section>

<script>
$(document).ready(function(){
    $("#show1").click(function(){
        $("#1").hide();
    });
    $("#show2").click(function(){
        $("#1").show();
    });
});
</script>