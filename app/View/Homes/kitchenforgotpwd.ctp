<style type="text/css">
	input[type=text] {
    
    
    margin: 8px 0;
    display: inline-block;
    border-bottom: 1px solid #ccc;
    border-top: none;
    border-left: none;
    border-right: none; 
    border-radius: 4px;
    outline: none!important;
    width: 76%;
    
  }
  .contforgot{
  	border: solid 1px lightgray;
    border-radius: 5px;
    
    width: 34%;
  }
  .btnforgotpass{
  	width: 32%;
    background-color: #0c786b;
    border-color: #0c786b;
    outline: none;
  }
  .btnforgotpass:hover{
  	background-color: #0c786b;
  	border-color: #0c786b;
  }
  .btnforgotpass:focus{
  	background-color: #0c786b;
  	border-color: #0c786b;
  	outline: none;
  }
</style>

<form method="post" action="" id="changepass" >
<div class="row">
	<div class="col-md-12" style="text-align: center;padding-top: 60px">
		<h3>Forgot Password</h3>
		<hr>
	</div>
</div>
<div class="container contforgot">
	
	<div class="row" style="padding-left: 20%;">
		<div class="col-md-12">
			<h6>New Password</h6>
			<h4><input type="text" name="data[Kitchen][new]" placeholder="New password"></h4>
		</div>
	</div>
	<div class="row" style="padding-left: 20%;">
		<div class="col-md-12">
			<h6>Confirm Password</h6>
			<h4><input type="text" name="data[Kitchen][confirm]" placeholder="Re-write new password"></h4>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-6">
		<input type="submit" class="btn btn-primary btnforgotpass" value="Submit">
	</div>
</div>
</form>