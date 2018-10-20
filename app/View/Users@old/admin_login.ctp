<?php echo $this->html->css(array('common/bootstrap.min'));?>
<script>
$(document).ready(function() {
	$('#email').focus();
	
	$('#AdminLogin').validate(
	{
		rules:
		{
			"data[Admin][username]":
			{
				required:true,
			},
			"data[Admin][password]":
			{
				required:true,
			}
		},
		messages:
		{
			"data[Admin][username]":
			{
				required:'This field is required.'
			},
			"data[Admin][password]":
			{
				required:'This field is required.'
			}
		}
	});
	
	
	$('#tabs, #tabs2, #tabs5').tabs();
});
</script>
<style>
.center-div{
	margin-top:120px;
	
}

</style>
		
		<div class="container-fluid">
			<div id="row">
				<div class="col-lg-12 heading">
					<h2><?php echo $admin_title?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 center-div" >
					<h4 class="text-center">Admin</h4>
				<div>				
			</div>
			<div class="row">
				<div class="col-lg-12">
					<input type="text" class="form-control" name="data['Admin']['username']">
				</div>
			</div>
			
       </div>
    </div>
