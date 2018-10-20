<div id="sub-nav">
	<div class="page-title">
		<h1>ADD CATEGORY</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add Category</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add Category
					</div>
						
					<div class="content-box-wrapper">
					<form enctype="multipart/form-data" name="myform" id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/add_category';?>">
					<fieldset>
							<ul>
							    <li>
									    <label class="desc" >Category<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="category" name="data[Category][title]" type="text">
										        <div style="color:red;float:left;" id="respon"></div>	
									     </div>
								</li>
								   
							    <li>
									    <label class="desc" >Description<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="description" name="data[Category][description]" type="text">
									     </div>
								   </li>
								   <li>
									    <label class="desc" >Image<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="description" name="photo" type="file">
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
<script>
	$(document).ready(function(){

		$('#tableForm').validate({
			rules:
			{

	 			"data[Category][category]":
				{
					required:true,
		  },
		  "data[Category][description]":
				{
					required:true,
		  }
			}
	});
	
	});
</script>