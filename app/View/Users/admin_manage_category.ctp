<div id="sub-nav" >
	<div class="page-title">
		<h1>CATEGORY LISTING</h1>
	</div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
		   
		  	<div id="google_translate_element"></div>
				<div class="inner-page-title">
		    	<h2 style="width:20%; float:left;">All Category Listing</h2>
					 <a class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/Users/add_category';?>">Add Category</a>  	 
					</div>
					<?php if($myvar = $this->Session->flash()){ ?>
						<div class="response-msg success ui-corner-all">
							<?php echo $myvar;?>
						</div>
						
					<?php } ?>
		     
			 		
		    		<div class="content-box content-box-header" style="border:none;">
					    <div class="three-col-mid">
					     <?php  echo $this->element('adminElements/category_list');?>
					    </div>
		     		</div>
		         
					<div class="clearfix"></div>			
					<div class="clear"></div>
			</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>