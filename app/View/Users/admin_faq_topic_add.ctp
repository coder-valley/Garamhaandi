<?php echo $this->Html->script('admin/jquery.validate.js'); ?>
<?php echo $this->Html->script('admin/additional-methods.js'); ?>
<?php echo $this->Html->script('common.js'); ?>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="">
					<fieldset>
							<ul>
								<li>
									    <label class="desc" >Topic<em style="color:red;">*</label>
									     <div>
										  <input class="field text full" id="Question" name="data[Topic][topic]" type="text">
										        <div style="color:red;float:left;" id="respon"></div>	
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

	 			"data[Topic][topic]":
				{
					required:true,
		  },
		 }
	});
	
	});
</script>