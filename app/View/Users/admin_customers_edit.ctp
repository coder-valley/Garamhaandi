<?php echo $this->Html->script('newadmin/jquery.validate.js'); ?>
<script type="text/javascript">
$(document).ready(function() {
		
	$('#editDetail').validate(
	{
		rules:
		{
			"data[User][username]":
			{
				required:true
			},
			"data[User][email]":
			{
				required:true,
			}
		},
		messages:
		{
			"data[User][username]":
			{
				required:'This field is required.'
			},
			"data[User][password]":
			{
				required:'This field is required.'
			}
		}
	});
	
});
</script>
<style>
.container_load{
	margin: 0px auto;
	width: 100px;
	position: absolute;
	top: 69%; left: 49%;
 }
 .loading_overlay
	{
		background-color: #E3E3E3;		
		height: 100%;
		left: 0;
		opacity: 0.3;
		position: fixed;
		top: 0;
		width: 100%;
		//z-index: 9999;
	}
</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>Edit User Details</h1>
		<span></span>
	</div>
		<div id="top-buttons">

		</div>

</div>

		
<div id="page-layout">
	<div id="page-content">
		<div id="page-content-wrapper">
			<a style="margin-bottom:10px;" class="ui-state-default ui-corner-all float-right ui-button" href="javascript:void(0);" onclick="history.go(-1)">Back</a>
			<div class="inner-page-title">
				<h2>Edit User Details</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>

							User Edit Details
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" action="" id="editDetail" >
							  <input type="hidden" name="id" value="<?php  echo $id;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Username</label>
									<div>
										<input name="name"  class="field text full required" type="text" value="<?php echo $details['User']['name']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc" >Email</label>
									<div>
										<input name="email"  class="field text full required email" type="email" value="<?php echo $details['User']['email']; ?>" >
									</div>
								</li>
                                <!-- <li>
									<label class="desc" >Gender</label>
									<div>
										<select name="gender" value="<?php echo $details['User']['gender'];?>">
										  <option value="Male">Male</option>
										  <option value="Female">Female</option>
										</select>
								</div>
								</li> -->
								<li>
									<label class="desc" >Contact No.</label>
									<div id="staticParent">
										<input id="child" name="contact_no" min="0" minlength="10" maxlength="10" class="field text full required number"  value="<?php echo $details['User']['contact_no']; ?>">
									</div>
								</li>
								<li>
									<input class = "sub-bttn" type="submit" value = "Submit"/>
								</li>							
								
							</ul>
						</fieldset>
					</form>
						</div>
                    	

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
	<div class="clear"></div>
<script type="text/javascript">
$(function() {
  $('#staticParent').on('keydown', '#child', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})
</script>