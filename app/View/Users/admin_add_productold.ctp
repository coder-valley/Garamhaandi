<?php echo $this->Html->script('admin/jquery.validate.js'); ?>
<?php echo $this->Html->script('admin/additional-methods.js'); ?>
<div id="sub-nav">
	<div class="page-title">
		<h1>ADD PRODUCT</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add Product</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add Product
					</div>
						
					<div class="content-box-wrapper">
					<form enctype="multipart/form-data" name="myform" id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/add_product';?>">
					<fieldset>
							<ul>
							    <li>
									    <label class="desc" >Product Name<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="name" name="data[Product][name]" type="text">
									     </div>
								</li>
								<li>
									    <label class="desc" >Product Price<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="price" name="data[Product][price]" type="text">
									     </div>
								</li>
								<li>
									    <label class="desc" >Product Description<em style="color:red;">*</label>
									     <div>
										      <textarea class="field text full" id="textar" name="data[Product][description]"></textarea>
									     </div>
								</li>
								<li>
									    <label class="desc" >Choose Image<em style="color:red;">*</label>
									    <div>
									    <input type="file" name="photo" class="field text full" id="im">	
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

	 			"data[Product][name]":
				{
					required:true
					
		        },
		        "data[Product][price]":
				{
					required:true,
					number:true
				},
		        "data[Product][description]":
				{
					required:true
					
		        },
		        "photo":
		        {
		        	required:true,
		        	accept:'jpg|jpeg|gif|png'
		        }
			},
			messages:
			{
				"photo":
				{
					required:'Please select an image',
					accept:'Please select an valid image'
				}
			}
	});
	
	});
</script>