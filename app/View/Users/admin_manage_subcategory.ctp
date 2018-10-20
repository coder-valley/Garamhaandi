<div id="sub-nav" >
	<div class="page-title">
		<h1>SUBCATEGORY LISTING</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
      
      
  <div id="google_translate_element"></div>
		<div class="inner-page-title">
    	<h2 style="width:20%; float:left;">All Subcategory Listing</h2>
                                <a style="margin-left:5px;" href="<?php echo HTTP_ROOT.'admin/users/manage_category'?>" class="ui-state-default ui-corner-all float-right ui-button">Back</a>
				<a class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/Users/add_subcategory/'.base64_encode(convert_uuencode($catId))?>">Add Subcategory</a>
			</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
	 		
    		<div class="content-box content-box-header" style="border:none;">
			    <div class="three-col-mid">
			     <?php  echo $this->element('adminElements/subcategory_list');?>
			    </div>
     	</div>
         
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>