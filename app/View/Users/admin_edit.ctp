<?php echo $this->Html->script('newadmin/jquery.validate.js'); ?>
<script type="text/javascript">
$(document).ready(function() {
		
	$('#editDetail').validate(
	{
		rules:
		{
			"data[Admin][username]":
			{
				required:true
			},
			"data[Admin][email]":
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
		<h1>Edit Admin Details</h1>
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
				<h2>Edit Admin Details</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>

							Admin Edit Details
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" action="<?php echo HTTP_ROOT.'admin/users/edit/'?>" id="editDetail" >
							  <input type="hidden" name="id" value="<?php  echo $id;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Username</label>
									<div>
										<input  class="field text full required" name="data[Admin][username]"  type="text" value="<?php echo $adminDetail['Admin']['username']; ?>" />
									</div>
								</li>
                                <li>
									<label class="desc" >Email</label>
									<div>
										<input  class="field text full required" id="email"  name="data[Admin][email]" type="email" value="<?php echo $adminDetail['Admin']['email']; ?>" />
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
