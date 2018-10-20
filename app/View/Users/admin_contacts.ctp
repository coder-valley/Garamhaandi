<div id="sub-nav" >
	<div class="page-title">
		<h1>REQUEST LIST</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
    
		<div id="google_translate_element"></div>
		<div class="inner-page-title">
    	<h2 style="width:50%; float:left;">All Requests</h2>
				 <span> </span>
			</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
	 		
    		<div class="content-box content-box-header" style="border:none;">
			    <div class="three-col-mid">
			     <?php  echo $this->element('adminElements/contact_list');?>
			    </div>
     	</div>
         
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
