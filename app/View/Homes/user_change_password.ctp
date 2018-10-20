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
		background-color: #29a79c!important;
		color: white;
	}
	.btn1234
	{
		background-color: #990002;
		color: white!important;
	}
	.btn1234:hover
	{
		opacity: 0.8!important;
		color: white;
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
	      <p class="text-center">Wanna Change Your Password</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	      <?php if($myvar = $this->Session->flash()){ ?>
        	<div class="response-msg success ui-corner-all">
          	<?php echo $myvar;?>
        	</div>
      		<?php } ?>
	      	<?php echo $this->element('frontElements/user_sidebar');?>
	        <div class="col-md-9 aboutheadmain m-b-50">
	        <div class="row" style="padding-top: 0px!important">
	        <div class="row" style="padding-left: 30px;padding-right: 30px;">
	        <form method="post" action="" id="changepass" >
	        <input type="hidden" name="userpass" value="<?php  echo $userDetail['User']['password'];?>"/>
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
								<input name="data[User][old]" class="field form-control text full i required" data-validate="required"  style="border:none;" type="password">
							</td>
						</tr>
						<tr>
							<td>
								<label class="desc" >New Password<em style="color:red;"></label>
							</td>
							<td>
								<input name="data[User][new]" class="field form-control text full i required" data-validate="required"  style="border:none;" type="password">
							</td>
						</tr>
						<tr>
							<td>
								<label class="desc" >Confirm Password<em style="color:red;"></label>
							</td>
							<td>
								<input name="data[User][confirm]" class="field form-control text full i required" data-validate="required"  style="border:none;" type="password">
							</td>
						</tr>
					</table>
				</div>
	        	<!-- <div class="col-md-3" style="padding-left: 5%">
	        		<h4>Old Password</h4><br>
	        		<h4 class="new">New Password</h4><br>
	        		<h4 class="confirm">Confirm Password</h4><br>
	        	</div>
	        	<div class="col-md-9" style="padding-left: 6%">
	        	<h4><input  class=" form-control a" name="data[User][old]"  type="password" value="" /></h4><br>
	        	<h4><input  class=" form-control a" id="password"  name="data[User][new]" type="password" value="" /></h4><br>
	        	<h4><input  class=" form-control a" id="password_again"  name="data[User][confirm]" type="password" value="" /></h4><br><br><br>
	        	</div> -->
	        	<button type="submit" class="btn btn123" style="margin-left:  42.5%; width: 10%; background-color: #0C786B; margin-top: .9%;">Submit</button>
	        	<a type="submit" id="btnsub" class="btn btn1234" href="<?php echo HTTP_ROOT.'/Homes/user_dashboard'?>">Cancel</a>
	        </form>
	        </div>
	        </div>	        	
	        </div>
	         	 
	        
	      </div>
	    </div>
	  </div>
	  </div>
</section>