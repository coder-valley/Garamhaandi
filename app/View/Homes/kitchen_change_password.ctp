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
	.btn123
	{
		background-color: #29a79c!important;
		color: white;
	}

	.btn123:hover
	{
		opacity: 0.8;
		color: white;
	}

	.btn1234
	{
		background-color: #990002;
		color: white!important;
	}
	.btn1234:hover{
		opacity: 0.8!important;
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
	  <div class="row m-t-40 m-b-20" style="margin-top:55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome to GaramHaandi</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	      <?php if($myvar = $this->Session->flash()){ ?>
        	<div class="response-msg success ui-corner-all">
          	<?php echo $myvar;?>
        	</div>
      		<?php } ?>
	      	<div class="col-md-3 aboutheadmain m-b-50 leftside">
				<?php echo $this->element('frontElements/sidebar');?>
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50">
	        <div class="row" style="padding-top: 0px!important">
	        <div class="row" style="padding-left: 30px;padding-right: 30px;"">
	        <form method="post" action="" id="changepass" >
	        <input type="hidden" name="kitpass" value="<?php  echo $kitDetail['Kitchen']['password'];?>"/>
			<input type="hidden" name="id" value="<?php  echo $id;?>"/>
				<div class="col-md-12">
					<h2><b>Change Your Password</b></h2><br>
	        	</div>
				<div class="col-md-12">
					<table class="table table-hover">
						<tr>
							<td>
								<label class="desc" >Old Password<em style="color:red;"></label>
							</td>
							<td>
								<input name="data[Kitchen][old]" class="field form-control text full i required" data-validate="required"  style="border:none;" type="password">
							</td>
						</tr>
						<tr>
							<td>
								<label class="desc" >New Password<em style="color:red;"></label>
							</td>
							<td>
								<input name="data[Kitchen][new]" class="field form-control text full i required" data-validate="required"  style="border:none;" type="password">
							</td>
						</tr>
						<tr>
							<td>
								<label class="desc" >Confirm Password<em style="color:red;"></label>
							</td>
							<td>
								<input name="data[Kitchen][confirm]" class="field form-control text full i required" data-validate="required"  style="border:none;" type="password">
							</td>
						</tr>
					</table>
				</div>
	        	<!-- <div class="col-md-3" style="padding-left: 5%">
	        		<h4>Old Password</h4><br>
	        		<h4>New Password</h4><br>
	        		<h4>Confirm Password</h4><br>
	        	</div>
	        	<div class="col-md-9" style="padding-left: 6%">
	        	<h4><input  class="field text full required" name="data[Kitchen][old]"  type="password" value="" /></h4><br>
	        	<h4><input  class="field text full required" id="password"  name="data[Kitchen][new]" type="password" value="" /></h4><br>
	        	<h4><input  class="field text full required" id="password_again"  name="data[Kitchen][confirm]" type="password" value="" /></h4><br><br><br>
	        	</div> -->
	        	<button type="submit" class="btn btn123" style="margin-left: 42.5%; width: 10%; background-color: #0C786B; margin-top: .9%;">Submit</button>
	        	<a type="submit" id="btnsub" class="btn btn1234" href="<?php echo HTTP_ROOT.'/Homes/kitchen_dashboard'?>">Cancel</a>
	        </form>
	        </div>
	        </div>	        	
	        </div>
	         	 
	        
	      </div>
	    </div>
	  </div>
	  </div>
</section>