<?php echo $this->Html->script('newadmin/jquery.validate.js'); ?>

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

							<form method="post" action="" id="editDetail" enctype="multipart/form-data">
							  <input type="hidden" name="id" value="<?php  echo $id;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Name</label>
									<div>
										<input name="name"  class="field text full required" type="text" value="<?php echo $edit_about_team['About_team']['name']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc">Designation</label>
									<div>
										<input name="designation"  class="field text full required " type="text" value="<?php echo $edit_about_team['About_team']['designation']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc">Description</label>
									<div>
										<input name="description"  class="field text full required " type="text" value="<?php echo $edit_about_team['About_team']['description']; ?>" >
									</div>
								</li>
                                <li>
                                    <label class="desc" for="firstname">Profile Image<em style="color:red;">*</em>
                                    </label>
                                    <div>
                                        <input class="field text full" style="width: 97%;" name="image" type="file">
                                    </div>
                                </li>
                                <li>
                                    <label class="desc" for="firstname">Profile Image</label>
                                    <div><img class="field text full" width="250px" src="<?php echo HTTP_ROOT.'img/about_team/'.$edit_about_team['About_team']['image']?>">
                                    </div>
                                </li>
								<!-- <li>
									<label class="desc" >Contact No.</label>
									<div id="staticParent">
										<input id="child" name="contact_no" min="0" minlength="10" maxlength="10" class="field text full required number"  value="<?php echo $details['User']['contact_no']; ?>">
									</div>
								</li> -->
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