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
	.buttonuserdash{
		background-color: #29a79c;
		color: white;
	}
	.buttonuserdash:hover{
		opacity: 0.8;
		color: white;
	}
	#kitname
	{
		font-size: 16px;
	}
</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top:55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome <span id="kitname"><?php foreach ($info as $detail): ?><?php echo $detail['Kitchen']['name']; ?><?php endforeach; ?></span></p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	     	<?php if($myvar = $this->Session->flash()){ ?>
        	<div class="response-msg success ui-corner-all" id="sucsmssage">
          	<?php echo $myvar;?>
        	</div>
      		<?php } ?>
	        <div class="col-md-3 aboutheadmain m-b-50 leftside">
				<?php echo $this->element('frontElements/sidebar');?>
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50">
	        <div class="row" style="padding-top: 0px!important">
	        	<div class="col-md-8" style="padding-left: 3%">
	        		<span style="font-size: 30px; "><?php foreach ($info as $detail): ?><?php echo $detail['Kitchen']['name']; ?><?php endforeach; ?></span>
	        	</div><br>
	        	<div class="col-md-4 rightside" style="margin-top: -16px; padding-right: 30px;text-align: right!important">
	        		<span>Total orders: </span><b>00</b><br>
	        	</div><br>
	        <div class="row" style="padding-top: 10px">
	        	<div class="col-md-3" style="padding-left: 5%">
	        		<h4>Email:-</h4><br>
	        		<h4>Phone Number:-</h4><br>
	        		<!-- <h4>Address:-</h4><br> -->
	        		<h4>City:-</h4><br>
	        		<h4>Delivery Locations:-</h4><br>
	        		<h4>
	        	<a class="btn buttonuserdash" style="color: white" href="<?php echo HTTP_ROOT.'/Homes/kitchen_change_password/'.base64_encode($this->Session->read('Kitchen.id'));?>">Change Password</a> <br><br><br></h4><br><br><br>
	        	</div>
	        	<div class="col-md-9" style="padding-left: 6%">
		        	<?php foreach ($info as $detail): ?>
		        		<h4><?php echo $detail['Kitchen']['email']; ?></h4><br>
		        		<h4><?php echo $detail['Kitchen']['contact_no']; ?></h4><br>
		        		<!-- <h4><?php echo $detail['Kitchen']['address']; ?></h4><br> -->
		        		<h4><?php echo $detail['City']['city_name']; ?></h4><br>
		        		<h4><?php foreach($detail['Kitlocation'] as $kit)
										echo $kit['Location']['location'].',';
									 ?></h4><br><br><br>
		        	<?php endforeach; ?>
	        	</div>
	        </div>
	        </div>	        	
	        </div>
	      </div>
	    </div>
	  </div>
	  </div>
</section>
<!--update STart-->
<script type="text/javascript">
   $(document).ready(function()
   {
      setTimeout(function() 
      {
        $('#sucsmssage').fadeOut('fast');
      }, 3000); // time in milliseconds
    });
</script>
<!--update STart-->