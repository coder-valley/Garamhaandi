<!-- 

<div id="sub-nav">
	<div class="page-title">
		<h1>EDIT CATEGORY</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);" class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Edit Category</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Please Enter the Information.
					</div>
						
					<div class="content-box-wrapper">
					<form enctype="multipart/form-data" name="myform" id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/edit_category';?>">
					<input type="hidden" name="data[Category][id]" value="<?php echo $edit_Category['Category']['id']; ?>">
						<fieldset>
							<ul>
							<li>
									<label class="desc" >Category<em style="color:red;">*</label>
									<div>
										<input class="field text full" id="category" name="data[Category][title]" type="text" value="<?php echo $edit_Category['Category']['title']; ?>">
									</div>
								</li>
								<li>
									<label class="desc" >Description<em style="color:red;">*</label>
									<div>
										<input class="field text full" id="description" name="data[Category][description]" type="text" value="<?php echo $edit_Category['Category']['description']; ?>">
									</div>
								</li>
								<li>
									<label class="desc" >Image<em style="color:red;">*</label>
									<div>
										<input class="field text full" id="description" name="photo" type="file" >
									</div>
								</li>
								<li>
									<label class="desc" >Image<em style="color:red;">*</label>
									<div>
										<img class= id="" src="<?php echo HTTP_ROOT.'img/category/'.$edit_Category['Category']['image']; ?>">
									</div>
								</li>


						  <li>
									 <input type="submit" value="Submit">
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
</script> -->