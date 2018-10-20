<?php echo $this->Html->script('admin/jquery.validate.js'); ?>

<style>
.type_1,.type_2{
	display:none;
	}
#listAuto{
	background:#fff;
    border: thin solid #ddd;
    border-radius: 5px;
    display: block;
    margin-top: 10px;
    padding: 10px;
    position: absolute;
    z-index: 9999;}	
</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>EDIT DASHBOARD DETAIL</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);" class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Edit Dashboard Detail</h2>
				<span></span>
			</div>
		<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all" style="color:red;">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Please Enter the Information.
					</div>
						
					<div class="content-box-wrapper">
					<form id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/edit_dash_detail';?>">
					<input type="hidden" name="data[DashDetail][id]" value="<?php echo $edit_dash['DashDetail']['id']?>">
						<fieldset>
							<ul>
								   <li>
									  <label class="desc" >Description<em style="color:red;">*</label>
								   	<div>
								   	<textarea class="full" style="resize:none;" name="data[DashDetail][description]"><?php echo $edit_dash['DashDetail']['description']?></textarea>
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
    "data[DashDetail][description]":
				{
					required:true
				}
			}
	});
	});
</script>
