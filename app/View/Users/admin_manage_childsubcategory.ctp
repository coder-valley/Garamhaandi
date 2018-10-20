<div id="sub-nav" >
	<div class="page-title">
		<h1>ALL CHILD SUB CATEGORY LISTING</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >

      
  <div id="google_translate_element"></div>
		<div class="inner-page-title">
    	<h2 style="width:50%; float:left;">All Child SubCategory Listing</h2>
    <a style="margin-left:5px;" href="<?php echo HTTP_ROOT.'admin/Users/manage_subcategory/'.base64_encode(convert_uuencode($id))?>" class="ui-state-default ui-corner-all float-right ui-button">Back</a>
<a class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/Users/add_childsubcategory/'.base64_encode(convert_uuencode($id))?>">Add Child Sub Category</a>
				
			</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
			<?php //echo '<pre>';print_r($child);die;
 ?>     
	 		
    		<div class="content-box content-box-header" style="border:none;">
			    <div class="three-col-mid">
			     <?php  echo $this->element('adminElements/childsubcategory_list');?>
			    </div>
     	</div>
         
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>