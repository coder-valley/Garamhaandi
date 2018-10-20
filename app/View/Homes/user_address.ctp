<link href="/GaramHaandi/Newfolder/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />

<script src="/GaramHaandi/Newfolder/js/bootstrap-multiselect.js" type="text/javascript"></script>
<style>
	.imagedash
	{
		width: 50%;
	}
	
	.leftside
	{
		text-align: center;
	}
	.rightside
	{
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

	.button123
	{
		background: #29a79c!important;
		border:none;
		color: white;
		float: right;
		margin-top: -4.9%;
	}
	.button123:hover
	{
		opacity: 0.8!important;
		border:none;
		color: white;
	}

</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top: 55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Your Saved Addresses</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	      	<?php if($myvar = $this->Session->flash()){ ?>
        	<div class="response-msg success ui-corner-all">
          	<?php echo $myvar;?>
        	</div>
      		<?php } ?>
	        <?php echo $this->element('frontElements/user_sidebar');?>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Your Saved Addresses</b></h2>
					<a class="btn button123" href="<?php echo HTTP_ROOT.'/Homes/user_add_address/'.base64_encode($this->Session->read('User.id'));?>">Add New Address</a>
	        	</div>
	        <div class="container col-md-12">
	        	<?php  echo $this->element('frontElements/address_list');?>
			</div>
	        </div>
	      </div>
	      </div>

	    </div>
	  </div>
</section>
