<style type="text/css">
.useralrdyrgstrd
  {
    color: red;
    font-weight: 700;
    text-align: center;
  }
</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>ADD TEAM MEMBER</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add TEAM MEMBER</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add TEAM MEMBER
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="" enctype="multipart/form-data">
					<fieldset>
							<ul>
							    <li>
									    <label class="desc required" >Name<em style="color:red;">*</label>
									     <div>
										      <input class="field text full required"  name="data[About_team][name]" type="text">
										        <div style="color:red;float:left;" id="respon"></div>	
									     </div>
								</li>
								   
							    <li>
									    <label class="desc">Designation<em style="color:red;">*</label>
									     <div>
										     <input class="field text required full" id="description" name="data[About_team][designation]" type="text">
									     </div>
								</li>
								<li>
									    <label class="desc">Description<em style="color:red;">*</label>
									     <div>
										     <input class="field text required full" id="description" name="data[About_team][description]" type="text">
									     </div>
								</li>
								<li>
									    <label class="desc">Upload Image<em style="color:red;">*</label>
									     <div>
										      <input type="file" name="image">
									     </div>
								</li>
								   <li>
									       <input type="submit" id="btnsub" value="Submit">									
								   </li>													
							</ul>
						</fieldset>
					</form>	
					</div>                        

				</div>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
