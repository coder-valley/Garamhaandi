<style>
.success {
    background: url("../../img/icons/success.png") no-repeat scroll 10px 50% #E9F9E5;
    border: 1px solid #B4E8AA;
    color: #1C8400;
}
ui.messages.css (line 65)
.response-msg {
    font-size: 0.96em;
    margin: 0 0 10px;
    padding: 6px 10px 10px 45px;
}
.pagesize,.pagedisplay 
{
	 border-color: #7C7C7C #C3C3C3 #DDDDDD;
    border-style: solid;
    border-width: 1px;
    color: #333333;
    float: left;
    margin: 5px;
    padding: 4px;
}
.colo{
	color:#000;
	background:#ddd;
	}
.mid_div{margin-top:10px;}
</style>

<div id="sub-nav" >
	<div class="page-title">
		<h1>PRODUCTS LISTING</h1>

	</div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
		
    <a style="margin-bottom:10px;margin-top:-6px !important;" class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/Users/add_product'?>">Add Product</a>  
		
		
		
		<div id="google_translate_element"></div>
		<div class="inner-page-title">
    	
			
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
	 		
    		<div class="content-box content-box-header" style="border:none;">
			    <div class="three-col-mid">
			     <?php  echo $this->element('adminElements/product_list');?>
			    </div>
     	</div>
         
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>