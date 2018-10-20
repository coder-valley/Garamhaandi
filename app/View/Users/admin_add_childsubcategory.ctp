<div id="sub-nav">
	<div class="page-title">
		<h1>ADD CHILDSUBCATEGORY</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add Childsubcategory</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add Childsubcategory
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/add_childsubcategory';?>">
     <input type="text" readonly="readonly"  value="<?php echo $subcat['Category']['title']?>" >
	 <input type="hidden" name="data[Category][parent_id]" readonly="readonly"  value="<?php echo $subcat['Category']['id']?>" >			
					<fieldset>
							<ul>
							    <li>
									    <label class="desc" >ChildSubcategory<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="ChildSubcategory" name="data[Category][title]" type="text">
									     </div>
								   </li>
								   
							    <li>
									    <label class="desc" >Description<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="description" name="data[Category][description]" type="text">
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

	 			"data[ChildSubcategory][childsubcategory]":
				{
					required:true,
		  },
		  "data[SubCategory][description]":
				{
					required:true,
		  }
			}
	});
	
	});
</script>