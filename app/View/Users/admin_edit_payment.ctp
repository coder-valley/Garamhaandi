<?php echo $this->Html->script('newadmin/jquery.validate.js'); ?>
<script type="text/javascript">
$(document).ready(function() {
		
	$('#editDetail').validate(
	{
		rules:
		{
			"data[PaymentPrice][price]":
			{
				required:true,
				number:true
				
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
		<h1>Edit Payment Price</h1>
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
				<h2>Edit Payment Price</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>

							Edit Follow Us Links
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" action="<?php echo HTTP_ROOT.'admin/users/edit_payment/'?>" id="editDetail" >
							  <input type="hidden" name="data[PaymentPrice][id]" value="<?php  echo $payments['PaymentPrice']['id'];;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Type</label>
									<div>
										<input  class="field text full required" name="data[PaymentPrice][type]"  type="text" value="<?php echo $payments['PaymentPrice']['type']; ?>" readonly>
									</div>
								</li>
								<li>
									<label class="desc" >Payment Price</label>
									<div>
										<input  class="field text full required" name="data[PaymentPrice][price]"  type="text" value="<?php echo $payments['PaymentPrice']['price']; ?>">
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
