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
        border-color: #29a79c;
    }
    .buttonuserdash:hover{
        opacity: 0.8!important;
        color: white;
    }

    .btnchngepswrd
    {
        margin-top: 0%;
        margin-left: 5%;
    }

    .button123
    {
        width: 14.7%;
        margin-left: 60%;
        border-color: #29a79c!important;
    }
    .buttoncolor:hover{
        background-color: #29a79c!important;
    }
    #unameidgh
    {
        font-size: 16px;
    }
</style>




<section>

	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="padding-top: 14px;">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome <span id="unameidgh"><?php foreach ($uinfo as $detail): ?>
                        <?php echo $detail['User']['name']; ?>
                        <?php endforeach; ?></span></p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	      <?php if($myvar = $this->Session->flash()){ ?>
        	<div class="response-msg success ui-corner-all" id="sucsssage">
          	<?php echo $myvar;?>
        	</div>
      		<?php } ?>
	      	<?php echo $this->element('frontElements/user_sidebar');?>
	        <div class="col-md-9 aboutheadmain m-b-50">
	        <div class="row" style="padding-top: 0px!important">
	        	<div class="col-md-8" style="padding-left: 3%">
	        		<span style="font-size: 30px; "><?php foreach ($uinfo as $detail): ?>
                        <?php echo $detail['User']['name']; ?>
                        <?php endforeach; ?>
                    </span>
	        	</div><br>
	        	<div class="col-md-4 rightside" style="margin-top: -16px; padding-right: 30px;">
	        		<span>Total Orders: </span><b>0</b><br>
	        	</div><br>
	        	<div class="row" style="padding-top: 10px">
    	        	<div class="col-md-3" style="padding-left: 5%;">
    	        		<h4>Email Address</h4><br>
    	        		<h4>Mobile Number</h4><br>
    	        		<h4>Saved Addresses</h4><br>
    	        	</div>
	        	    <div class="col-md-9" style="padding-left: 6%">
                        <?php foreach ($uinfo as $detail): ?>
	        		    <h4><?php echo $detail['User']['email']; ?></h4><br>
	        		    <h4><?php echo $detail['User']['contact_no']; ?></h4><br>
	        		    <h4><?php foreach($detail['Address'] as $user)echo $user['adress'].','.$user['City']['city_name'].'<br>';?></h4><br><br><br>
                        <?php endforeach; ?>
	        	    </div>
                    <a class="btn buttonuserdash btnchngepswrd" href="<?php echo HTTP_ROOT.'/Homes/user_change_password/'.base64_encode($this->Session->read('User.id'));?>">Change Password</a>
                    <a class="btn buttonuserdash button123" href="<?php echo HTTP_ROOT.'/Homes/user_address/'.base64_encode($this->Session->read('User.id'));?>">Addresses</a>
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
        $('#sucsssage').fadeOut('fast');
      }, 3000); // time in milliseconds
    });
</script>
<!--update STart-->